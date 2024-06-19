
<?php 
$servername="localhost";
$username="root";
$passward="";
$dbname="phptut";

//create the connection 
$conn= new mysqli( $servername,$username, $passward,$dbname);
//get all users
$sql="select * from copydb";
$result=$conn -> query($sql);



$servername="localhost";
$username="root";
$passward="";
$dbname="phptut";

//create the connection 
$conn= new mysqli( $servername,$username, $passward,$dbname);
//get all users
$sql="select * from copydbsy";
$result=$conn -> query($sql);

//echo "<pre>";
//print_r($result);
//exit;
?>