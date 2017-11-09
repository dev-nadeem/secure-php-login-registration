<?php
ob_start();
session_start();
require_once 'inc/dbconnection.php';
require_once 'inc/functions.php';
$errorMsg = "";
$email =trim($_POST["lemail"]);
$password =trim($_POST["lpassword"]);

if(empty($email)){
    $errorMsg .="<li>Email is required</li>";
} else {
    $email = filterEmail($email);
    if($email == FALSE){
        $errorMsg .="<li>Invalid Email format</li>";
    }
}

if(empty($password)) {
    $errorMsg .= "<li>Password required</li>";
} else {
    $password = $password;
}
    if(empty($errorMsg)) {
        $query = $db->prepare("SELECT password FROM users WHERE email = ?");
        $query->execute(array($email));
        $pwd = $query->fetchColumn();
        if(password_verify($password, $pwd)){
            $_SESSION['email'] = $email;
            echo json_encode(['code' =>200, 'email'=>$_SESSION['email']]);
            exit;
        } else {
            echo json_encode(['code' =>400, 'msg'=>'Invalid UserName / Password']);
            exit;
        }
    } else {
        echo json_encode(['code'=>404, 'msg'=>$errorMsg]);
    }
    
    ?>