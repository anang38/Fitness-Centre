<?php
session_start();
unset($_SESSION['username']);
header('Location: login.php');

?>
<?php
if( !isset( $_SESSION['username'] ) || time() - $_SESSION['login_time'] > 60)
{
    header("Location:login.php");
}
else
{
    // uncomment the next line to refresh the session, so it will expire after thirteen minutes of inactivity, and not thirteen minutes after login
    //$_SESSION['login_time'] = time();
    echo ( "this session is ". $_SESSION['username'] );
    //show rest of the page and all other content
}
?>