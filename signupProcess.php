<?php
ob_start();
require_once('inc/dbconnection.php');
require_once('inc/functions.php');

$errorMsg = "";
$rname = trim($_POST["rname"]);
$remail = trim($_POST["remail"]);
$rpassword = trim($_POST["rpassword"]);
$rmobile = trim($_POST["rmobile"]);

    if(empty($rname)){
        $errorMsg .= "<li>Name is required </li>";
    } else {
        $rname = $rname;
    }
    if(empty($remail)){
        $errorMsg .= "<li>Email is required </li>";
    } else {
        $remail = filterEmail($remail);
        if($remail == FALSE) {
            $errorMsg .="<li>Invalid Email Format</li>";
        }
    }
    
    if(empty($rpassword)){
        $errorMsg .= "<li>Password is required </li>";
    } else {
        $rpassword = password_hash($rpassword, PASSWORD_DEFAULT);
    }
    
    if(empty($rmobile)) {
        $errorMsg .="<li>Mobile is required</li>";
    } else {
        $rmobile = $rmobile;
    }
    
    if(empty($errorMsg)){
        $qry = $db->prepare("SELECT email FROM users WHERE email=?");
        $qry->bindparam(1,$email);
        $qry->execute();
        
        if($qry->rowCount()>0) {
            echo json_encode(['code'=>400,'msg'=>'Email Already Exist']);
            exit;
        } else {
            $stmt = $db->prepare("INSERT INTO users(name, email, password, mobile) VALUES (:name, :email, :password, :mobile)");
            $stmt->execute(array(':name'=>$rname, ':email'=> $remail, ':password'=>$rpassword,':mobile'=>$rmobile));
            $affected_rows = $stmt->rowCount();
            if($affected_rows == 1){
                echo json_encode(['code'=>200, 'msg'=>'successfully signup']);
                exit;
            } else {
                    echo json_encode(['code' =>400]);
                    exit;
            }
        }
        
    } else {
        echo json_encode(['code'=>404,'msg'=>$errorMsg]);
    }
    ?>