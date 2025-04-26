<?php require_once(__DIR__.'/vendor/autoload.php'); // Copy the file and paste it where it belongs. change autoload path accordingly.
// Functions and loaded data here.
use raymondoor\DBstatement;
use raymondoor\rqst_validate;
use function raymondoor\request_url_schm_usr;
use function raymondoor\return_header;

session_start();

$TITLE = 'Weekly Task Manager';
$INDEX = 'home';
$request = new rqst_validate();
if($request->admin_gate()){
    return_header('/admin/');
}

include_once(TEMPLATE_DIR.'/html-head.php');
// include_once(TEMPLATE_DIR.'/html-header.php');
?>
<main>
    <h1>Weekly Task Manager</h1>
    <form action="<?=FORM_URL?>/adm-login.php" method="post">
        <h2>Login</h2>
        <div id="txtInput">
            <label for="form-username">Username : </label><br>
            <input type="text" placeholder="Username" id="form-username" name="username" required autocomplete="off" autofocus><br>
            <label for="form-email">Email : </label><br>
            <input type="text" placeholder="Email" id="form-email" name="email" required autocomplete="off" autofocus><br>
            <label for="form-password">Password : </label><br>
            <input type="password" placeholder="Password" id="form-password" name="password" required autocomplete="off"><br>
            <label for="form-keep">Keep Logged In : </label>
            <input type="checkbox" id="form-keep" name="keep" checked><br>
        </div>
<?php if(isset($_SESSION['raymondoor_formerror'])){?>
        <p id="errmsg"><?=$_SESSION['raymondoor_formerror']?></p>
<?php unset($_SESSION['raymondoor_formerror']);
}else{?>
        <p id="errmsg"></p>
<?php }?>
        <input type="submit" value="Log In" id="loginBtn">
    </form>
</main>
<?php
// include_once(TEMPLATE_DIR.'/html-footer.php');