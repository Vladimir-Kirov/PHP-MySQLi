<?php

$title = "Login page";

require "includes/config.php";
require "includes/header.php";

if (isset($_SESSION['is_logged']))
{
    header('Location: index.php');
    exit;
}

if (isset($_POST['login']))
{
    $error_messages = [];
    $error = false;

    if(!isset($_POST['email'])) 
    {
        $error = true;
        $error_messages[] = 'email is not set';
    }

    if(!isset($_POST['password'])) 
    {
        $error = true;
        $error_messages[] = 'password is not set';
    }

    if(strlen($_POST['password']) < 3 || strlen($_POST['password']) > 30) 
    {
        $error = true;
        $error_messages[] = 'Ivalid password length';
    }

    if(!$error) 
    {
        $email = $mysqli->real_escape_string(trim($_POST['email']));
        $password = $mysqli->real_escape_string(trim($_POST['password']));

        $query = $mysqli->query("SELECT id, email, password FROM users WHERE email = '" . $email . "' 
            AND password ='" . md5($password) . "'");


        $isExistUser = $query->num_rows == 1 ? TRUE : FALSE; 

        if ($isExistUser)
        {
            $row = $query->fetch_assoc();
            $_SESSION['is_logged'] = TRUE;
            $_SESSION['email'] = $email;
            $_SESSION['id'] = $row['id'];

            header('Location: index.php');
            exit;
            
        }

        else
        {
            $error_messages[] = 'Ivalid emial or password';    
        }
    }
}

?>

    <form action="login.php" method="POST" class="login-form" id="register">

        <b>Login</b> | <a href="registration.php">New Registration</a><br><br>
        <?php
        if(isset($error_messages) && count($error_messages) > 0) {
            printErrors($error_messages);
        } 
        ?>
        <div id="message">
                
        </div>
        <label> 
            <span>Еmail: </span>
            <input type="email" name="email" id="email" maxlength="30" size="20" required/>
        </label>
        <label>
            <span>Password: </span> 
            <input type="password" name="password" maxlength="30" size="20" required />
        </label>
        <div><input type="submit" value="Login" name="login" class="button"></div>

    </form>
    <br/>

<?php include "includes/footer.php"; ?>