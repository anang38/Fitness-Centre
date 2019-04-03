<?php include 'header.php';
?>
<?php include 'connection.php'; ?>
<?php
session_start();
if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($con,$_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $query = "SELECT * FROM login WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($con, $query);
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['login_time'] = time();
        header("Location: panel.php");
    } else {
        echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login Page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body style="background-image:url(image/w.jpg);background-size: cover;">

        <div class="container-fluid">
            <center>
                <div class="container">

                    <div class="col-sm-4">

                    </div>
                    <div class="col-sm-4" style="background-color: rgba(0,0,0,0.5);padding:15px;color:white;transform: translate(0%,50%)">

                        <h2>LOGIN</h2>
                        <form action="login.php" method="POST">
                            <div class="form-group">
                                <label for="name">UserName</label>
                                <input type="name" class="form-control" id="name" placeholder="Enter username" name="username">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="password">
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox"> Remember me</label>
                            </div>

                            <input type="submit" name="submit" value="Login" class="btn btn-success">
                        </form>  

                    </div>
                    <div class="col-sm-4">

                    </div>

                </div>
            </center>


        </div>

    </body>
</html>