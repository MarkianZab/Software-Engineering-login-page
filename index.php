<!DOCTYPE HTML>
<?php
    session_start();
    $username="user";
    $password="password";
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true) {
        header("location:loginsucess.php");
    }
    if(isset($_POST['username']) && isset($_POST['password'])) {
        if($_POST['username'] == $username && $_POST['password']==$password) {
            $_SESSION['loggedin']=true;
        }
        else {
            echo "Username or password is incorrect";
        }
    }
?>