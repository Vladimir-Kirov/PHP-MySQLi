<?php

$title = "Registration";

require "includes/config.php";
require "includes/header.php";

if (isset($_SESSION['is_logged']))
{
    header('Location: index.php');
    exit;
}

if (isset($_POST['register']))
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
        $error_messages[] = 'Ivalid password length';
        $error = true;
    }

    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    {
        $error_messages[] = 'You have entered an invalid email';
        $error = TRUE;
    }

    if (!CheckForValidData(strtolower($_POST['password'])))
    {
        $error_messages[] = 'You have entered an invalid password';
        $error = TRUE;
    }

    $email = $mysqli->real_escape_string(trim($_POST['email']));
    $password = $mysqli->real_escape_string(trim($_POST['password']));

    if (!$error)
    {

        $sql = "SELECT email FROM users WHERE email = '" . $email . "'";
        $query = $mysqli->query($sql);

        $isExistUser = $query->num_rows >= 1 ? TRUE : FALSE; 

        if ($isExistUser) 
        {
            $error_messages[] = 'email already exist!';
            $error = TRUE;
        }
        else 
        {
            $sql = 'INSERT INTO users (email, password) VALUES ("' . $email . '", "' . md5($password) . '");';
            $query = $mysqli->query($sql);


            $_SESSION['is_logged'] = TRUE;
            $_SESSION['email'] = $email;
            $_SESSION['id'] = $mysqli->insert_id;
            header('Location: index.php');
            exit;
        }
    }
}

?>

    <form action="registration.php" method="POST" class="login-form" id="register">

        <a href="login.php">Login</a> | <b>New Registration</b><br><br>
        <?php
        if(isset($error_messages) && count($error_messages) > 0) 
        {
            printErrors($error_messages);
        } 
        ?>
        <div id="message">
                
        </div>
        <label>
            <span>Еmail: </span>
            <input type="email" name="email" id="email" required maxlength="30" size="20"/>
        </label>
        <label>
            <span>Password: </span> 
            <input type="password" name="password" required maxlength="30" size="20"/>
        </label>
        <div>
            <input type="submit" value="Sign Up" class="button" name="register">
            <input type="reset" value="Clear" class="button">
        </div>
    </form>
    <br>

<?php include "includes/footer.php"; ?>