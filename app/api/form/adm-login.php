<?php require_once(__DIR__.'/../../../vendor/autoload.php');

use raymondoor\DBstatement;
use raymondoor\rqst_validate;
use function raymondoor\return_header;
use function raymondoor\generate_log;

session_start();
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(count(array_filter($_POST)) === count($_POST)){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $keep = $_POST['keep'];
        try{
            $query = new DBstatement('SELECT * FROM users WHERE username = :username');
            $result = $query->execute([':username' => $username]);
        }catch(Exception $e){
            $_SESSION['raymondoor_formerror'] = $e->getMessage();
            return_header('/?error=DB_Error');
        }
        if(!empty($result)){
            if($email == $result[0]['email']){
                if(password_verify($password, $result[0]['password'])){
                    if($keep){
                        $tkn = bin2hex(random_bytes(32));
                        setcookie('login', $tkn, strtotime('+14 days'), raymondoor\HOME_PATH.'/', '', true);
                        try{
                            $query = new DBstatement('UPDATE users SET lgntkn = :tkn WHERE username = :username');
                            $result = $query->execute([':tkn' => $tkn, ':username' => $username]);
                        }catch(Exception $e){
                            $_SESSION['raymondoor_formerror'] = $e->getMessage();
                            return_header('/?error=DB_Error');
                        }
                    }
                    $_SESSION['raymondoor_username'] = $username;
                    $log_data = '"'.date("Y-m-d H:i:s").'", "Login"';
                    generate_log('/login/login-', $log_data);
                    unset($_SESSION['raymondoor_mistake']);
                    return_header('/admin/?message=Welcome!');
                }else{
                    $limit = 5; // Change here to set allow attempts
                    $_SESSION['raymondoor_mistake'] ++;
                    if($_SESSION['raymondoor_mistake'] >= $limit){
                        $_SESSION['raymondoor_login-over'] = true;
                        $log_data = '"'.date("Y-m-d H:i:s").'", "Block", "From: '.$_SERVER['REMOTE_ADDR'].'"';
                        generate_log('/login/login-', $log_data);
                        return_header('/?error=Cannot_Try_Anymore');
                    }
                    $_SESSION['raymondoor_formerror'] = 'Incorrect Password. Attempts left: '.$_SESSION['raymondoor_mistake'].'/'.$limit.'.';
                    return_header('/?error=Wrong_Password');
                }
            }
            else{
                $_SESSION['raymondoor_formerror'] = 'Wrong Email Address';
                return_header('/?error=Wrong_Email');
            }
        }else{
            $_SESSION['raymondoor_formerror'] = 'Such Username doesn\'t Exist';
            return_header('/?error=Wrong_Username');
        }
    }else{
        $_SESSION['raymondoor_formerror'] = 'Please fill All Areas.';
        return_header('/?error=Fill_All');
    }
}