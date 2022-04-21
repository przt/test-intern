<?php 
include 'conn.php';

$tittle = $_POST['tittle'];
$author = $_POST['author'];

$add_book = mysqli_query($mysqli_connect,"insert into book values('','$tittle','$author')");

header("location:index.php");
 
?>