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
    echo"saved successfully";
}
else{
    echo"failed";
}

$firstname= $_POST['firstname'];
$lastname= $_POST['lastname'];
$username= $_POST['username'];
$email= $_POST['email'];
$optionsradios= $_POST['optionsradios'];
$password= $_POST['password'];
$password_confirm= $_POST['password_confirm'];


$sql = "INSERT INTO tutor (firstname, lastname, username, email, optionsradios, password, password_confirm) values('$firstname', '$lastname', '$username', '$email', '$optionsradios', '$password', '$password_confirm')";


if(Mysqli_query($conn, $sql)){
    echo"Inserted successfully";
}
else echo" Not Inserted";
    header("refresh:0; url=tt/index.html"); 
    
     ?>