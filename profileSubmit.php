<?php
    // get values from the url
    $email = $_POST['email'];
    $name = $_POST['name'];
    $class = $_POST['class'];

    // validate user values
    if( ! filter_var($email, FILTER_VALIDATE_EMAIL)) die('Invalid email');

    header("Location: profile.php");
?>