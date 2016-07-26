<?php

mb_internal_encoding('UTF-8');
session_start();

$mysqli = new mysqli('localhost', 'root', '0896482336', 'web_based_system');

function CheckForValidData($value, $minLength = 5)
{
    if (mb_strlen($value, 'UTF-8') < $minLength) return FALSE;

    for ($i = 0; $i < strlen($value); $i++)
        if (($value[$i] < 'a' || $value[$i] > 'z') && ($value[$i] < '0' || $value[$i] > '9'))
            return FALSE;

    return TRUE;
}

function ShowHelloScreen()
{
    echo 'Hello, ';
    if (isset($_SESSION['email']))
    {
        echo $_SESSION['email'];
        echo '! | <a href="logout.php">Logout</a>';
    }
    else
    {
        echo 'Anonymous';
        echo '! | <a href="login.php">Login</a>';
    }
}

function printErrors($error_messages)
{
    echo '<ul class="error">'; 
     foreach ($error_messages as $message) {
        echo '<li>'.  $message . '</li>';

    }
    echo '</ul>';
}

?>
