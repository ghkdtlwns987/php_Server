<?php
    include("../init.php");

    $email = $_POST['email'];
    $password = $_POST['password'];

    $enc_password = password_hash($password_hash($password, PASSWORD_DEFAULT);
    $result = mysqli_query($db, "insert into users (email, password) values ('{$email}', '{$enc_password}')");

    die("<script>alert('success');window.location.href='../';</script>");
