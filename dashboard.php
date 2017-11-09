<?php
ob_start();
session_start();
require_once 'inc/dbconnection.php';

if(isset($_SESSION) && $_SESSION["email"]) {
    echo '<a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Sign Out</a><br>';
    echo "Hallo ". $_SESSION['email'];
} else {
    header("Location: index.php");

}
