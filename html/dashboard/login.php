<?php
/**
 * Created by PhpStorm.
 * User: test
 * Date: 6/29/2016
 * Time: 9:18 PM
 */
session_start();

include("connection.php");

if(!empty($_SESSION['username'])){
    header("Location:home1.php");
}

?>


    <html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">


        <script>
            function validate(){
                var username = document.getElementById("username").value;
                var usernameRegex = /^[a-zA-Z0-9.\-_$@*!]{3,30}$/;

                if (username.match(usernameRegex)) {
                    document.getElementById("error-name").style.display = "none";
                    return true;
                } else {
                    document.getElementById("error-name").style.display = "block";
                    return false;
                }
            }

        </script>

    </head>

    <body>


    <div class="container" style="margin-top:150px;display: flex; height: 50%;width: 40%; justify-content: center; align-items: center; background-color: #f1f1f1">

        <form style="width: 350px;" class="form-signin loginForm" id="login-form" method="post" action="login.php" onsubmit="return validate()">
            <input type="hidden" name="login" value="login">
            <img class="logo" src="../../images/logo-01.PNG" style="height: 100px; width: 350px;" ><br>
            <input type="text" id="username" class="form-control" placeholder="Username" name="username" required autofocus></br>

            <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required></br>

            <input class="btn btn-lg btn-primary btn-block" type="submit" id="signIn" name="login" value="Log In" /></br>

            <span id="error-name" style="display: none">Invalid Username.</span>
        </form>
        <div class="row">
        </div>
    </div>

    </body>


    </html>

<?php
include 'connection.php';
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password= ($_POST['password']);

    $credentials_query = "select * from User where username LIKE '%$username%'";
    $credentials = mysqli_query($conn, $credentials_query);
    if(mysqli_num_rows($credentials)>0){

        while($row_query = mysqli_fetch_array($credentials)){
            $db_username = $row_query['username'];
            $db_password = $row_query['password'];
        }
        if($username == $db_username && $password == $db_password){
            $_SESSION['username'] = $username;
            header("Location: home1.php");
        }else{
            echo "Invalid username and password";
        }
    }else{
        echo "Invalid username and password";
    }


}

?>