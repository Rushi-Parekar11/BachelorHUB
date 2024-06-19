<?php 
 $servername="localhost";
 $username="root";
 $passward="";
 $dbname="phptut";

 //create the connection 
 $conn= new mysqli( $servername,$username, $passward,$dbname);

 //check the connection 
 if($conn->connect_error){
    echo "connection failed :".$conn->connect_error;
 }
    echo "connection done"
?>