<?php 
$servername = "localhost";


// Create connection
$conn = new mysqli($servername, $first_name, $last_name, $email, $username, $optionradios, $password, $password_confirm);
// Check connection
if ($conn->connect_error) { 
	die("Connection failed: " . $conn->connect_error);} 
echo "Connected successfully";
?>

<?php
// $con = mysqli_connect('localhost','root','')   
//     
//     if(!$con){
//         echo"not conneceted"
//     } else echo"Connected"

$db_name ="stevedb";
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

$ = $_POST"first_name";
$last_name =$_POST "last_name";
$email =$_POST "email";
$username = $_POST"username";
$optionradios = $_POST "optionradios";
$password = $_POST"password";
$password_confirm = $_POST [password_confirm];



$first_name= $_POST['first_name'];
$lname= $_POST['lname'];
$username= $_POST['username'];
$gender= $_POST['gender'];
$dateofbirth= $_POST['dateofbirth'];
$idnumber= $_POST['idnumber'];
$county= $_POST['county'];
$phonenum= $_POST['phonenum'];
$email= $_POST['email'];
$password= $_POST['password'];
$passwordrpt= $_POST['passwordrpt'];


$sql = "INSERT INTO rops (fname,lname,username,gender,dateofbirth,idnumber,county,phonenum,email,password,passwordrpt) values('$fname','$lname','$username','$gender','$dateofbirth','$idnumber','$county','$phonenum','$email','$password','$passwordrpt')";


if(Mysqli_query($conn, $sql)){
    echo"Inserted successfully";
}
else echo" Not Inserted";
    header("refresh:30; url=formss.php"); 
    
     ?>