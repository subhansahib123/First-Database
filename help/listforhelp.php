<?php 

include('help.php');
$query = 'select * from phphelper';
$res=mysqli_query($conn,$query);
// $rows=mysqli_fetch_assoc($res);
while($rows=mysqli_fetch_assoc($res)){
    echo $rows['Number'].'-- '.$rows['Company'].'-- '.$rows['Date'] .'<br/>';
}

?>