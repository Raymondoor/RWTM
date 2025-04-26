<?php require_once(__DIR__.'/../vendor/autoload.php'); // Copy the file and paste it where it belongs. change autoload path accordingly.
// Functions and loaded data here.
use raymondoor\DBstatement;
use raymondoor\rqst_validate;
use function raymondoor\request_url_schm_usr;
use function raymondoor\return_header;

session_start();

$TITLE = 'Log out';
$INDEX = 'admin-logout';

try{
    $query = new DBstatement('UPDATE users SET lgntkn = :tkn WHERE username = :username');
    $result = $query->execute([':tkn' => null, ':username' => $username]);
    setcookie('login', $tkn, 0, raymondoor\HOME_PATH.'/', '', true);
    $_SESSION = [];
    return_header('/');
}catch(Exception){

}