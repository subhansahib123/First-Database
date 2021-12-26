<?php
// echo 'Successfuly Connected';
include('help.php');
$Number = $_POST['Number'];
$Company = $_POST['Company'];
$Date = $_POST['Date'];
$query = 'INSERT INTO `phphelper`( `Number`, `Company`, `Date`) VALUES ("'.$Number.'","'.$Company.'","'.$Date.'")';
mysqli_query($conn,$query);
header('location:index01.php')




?>
