<?php 
include 'conn.php';

$name = $_POST['name'];
$private_number = $_POST['private_number'];
$email = $_POST['email'];
$date = $_POST['date'];
$id_book = $_POST['id_book'];

$check_date = mysqli_query($mysqli_connect, "select date from loan where id_book=$id_book");
$d = mysqli_fetch_array($check_date);
$actual_date = $d['date'];

$date_plus5 = date('d',strtotime($actual_date,'+ 5 days'));
$date1 = date('d',strtotime($actual_date));
$date2 = date('d',strtotime($date));

if ($date2 == $date1 ){
    echo '<script type ="text/JavaScript">';  
    echo 'alert("Buku sedang dipinjam")';  
    echo '</script>';
} elseif ($date <= $date_plus5){
    echo '<script type ="text/JavaScript">';  
    echo 'alert("Buku sedang dipinjam")';  
    echo '</script>';
} else{
    $add_book = mysqli_query($mysqli_connect,"insert into loan values('','$name','$private_number','$email',
                        '$date', '$id_book')");    
}

header("location:loan.php");
 
?>