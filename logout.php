<?php
session_start();
unset($_SESSION['email']);
if(session_destroy()) {
    header("Location: index.php");
}
?>