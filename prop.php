<?php
// $con = mysqli_connect('localhost','root','')   
//     
//     if(!$con){
//         echo"not conneceted"
//     } else echo"Connected"

$db_name ="mzee";
$mysql_username = "root";
$mysql_password = "";
$server_name ="localhost";
$conn = mysqli_connect($server_name, $mysql_username, $mysql_password, $db_name);

if($conn){
    echo"successful";
}
else{
    echo"failed";
}

$fullnamename= $_POST['fullname'];
$username= $_POST['username'];
$email= $_POST['email'];
$password= $_POST['password'];


$sql = "INSERT INTO donor (fullname,username,email,password) values('$fullname','$username','$email','$password')";


if(Mysqli_query($conn, $sql)){
    echo"Inserted successfully";
}
else echo" Not Inserted";
    header("refresh:30; url=index.html"); 
    
     ?>