<?php

include("ayar.php");
session_start();
ob_start();
?>
<style type="text/css">
    h1{
        color: red;
        box-shadow: 10px 10px 5px #888888;
    }
</style>
<?php

if (($_POST["username"] == $user) && ($_POST["password"] == $pass)) {
    $_SESSION["login"] = "true";
    $_SESSION["user"] = $user;
    $_SESSION["pass"] = $pass;
    header("Location:admin.php");
}
if (($_POST["username"] == $user1) && ($_POST["password"] == $pass1)) {

    $_SESSION["user"] = $user1;
    $_SESSION["pass"] = $pass1;
    header("Location:customer.php");
} else {
    echo "<html><body><h1 align='center'>Username or Password is false <br> You are redirected to the Login Page in 3 Seconds";
    echo "</body></html>";
    header("Refresh: 3; url=index.php");
}
ob_end_flush();
?>
