<?php

$server='localhost';
$username='root';
$password='';
$database='job';

$conn=mysqli_connect($server,$username,$password,$database);

if($conn->connect_error){

  die("Connection failed:".$conn->connect_error);
}
echo "";

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $number=$_POST['phone_no'];
  $password=$_POST['password'];

  $sql="INSERT INTO `user`( `Name`, `email`, `password`,`phone_no`) VALUES ('$name','$email','$password','$number')";

  if(mysqli_query($conn,$sql)){
    echo "Record inserted successfully";
  }else{
    echo "ERROR: Could not able to execute $sql." . mysqli_error($conn);
  }
}

mysqli_close($conn);

 ?>
