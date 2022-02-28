<?php 

session_start();
ob_start();

function filter_inp($data) {
    
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

}


if (isset($_POST['email']) and isset($_POST['password'])){
    if ($_POST['email'] == "selva@gmail.com" and $_POST['password'] == "selva2021"){
        $_SESSION['auth_token'] = md5($_POST['email'].$_POST['password']);
        header('Location: http://localhost:8181/akiba/html/login.html');
    }else{
        echo "<script>alert('Invalid username or password')</script>";
        header('Location: http://localhost:8181/akiba/html/index.html');
    }
}else{
    echo "<script>alert('Invalid entry')</script>";
    header('Location: http://localhost:8181/akiba/html/index.html');
}

ob_end_flush();

