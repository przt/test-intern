<?php

include 'conn.php';

$id = $_POST['id'];
$tittle = $_POST['tittle'];
$author = $_POST['author'];
 
mysqli_query($mysqli_connect,"update book set tittle='$tittle', author='$author' where id='$id'");
 
header("location:index.php");
 
?>