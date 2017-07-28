<?php        
session_start();	

if (!isset($_SESSION['name'])){
    header('Location:  http://localhost/cv/');
}

$username = $_SESSION['name'];

?>
