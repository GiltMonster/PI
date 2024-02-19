<?php
$email = $_POST['email'];
$password = $_POST['password'];

login();

function login()
{
    global $email, $password;

    if ($email == 'admin@gmail.com' && $password == 'admin') {
        echo '<h1>Welcome Admin</h1>';
    } else {
        echo '<h1>Invalid Email or Password</h1>';
    }
}
