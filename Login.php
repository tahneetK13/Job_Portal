
<?php

//include 'config.php';
$server='localhost';
$username='root';
$password='';
$database='job';

$conn=mysqli_connect($server,$username,$password,$database);

if($conn->connect_error){

  die("Connection failed:".$conn->connect_error);
}
echo "";



session_start();
if(isset($_POST['Login'])){
  $email=$_POST['email'];
  $password=$_POST['password'];

  $query="SELECT * FROM user WHERE  `email`='$email' AND `password`='$password'";

  $result=mysqli_query($conn,$query);
  $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

  if(mysqli_num_rows($result)==1){
    header("location:index.php");
  }
  else{
    $error='emailid or password incorrect';
  }
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <!-- bootsrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <style media="screen">

    body{
      background-image: url('image/img1.jpg');
      background-size: cover;
    }
      form{
        background-color: #fff;
        margin-top: 6em;
        margin-left: 30em;
        margin-right: 10em;
        padding: 30px;
        box-shadow: 10px 10px 8px 10px #888888;
      }
    </style>

    <title>Login</title>
  </head>
  <body>
    <div class="container">
      <form method="post">


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>



  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>


  <button type="submit" class="btn btn-primary" name="Login">Submit</button>
  <p style = "text-align: centre;">New User? <br>Create Account <a href="register.php"> Sign Up</a> </p>

</form>

    </div>

  </body>
</html>
