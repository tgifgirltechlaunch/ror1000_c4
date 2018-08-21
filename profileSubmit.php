<?php
    // get values from the url
    $name = $_POST['name'];
    $email = $_POST['email'];
    $class = $_POST['class'];

    // validate user values
    if( ! filter_var($email, FILTER_VALIDATE_EMAIL)) die('Invalid email');

    header("Location: profile.php");
?>