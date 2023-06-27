<?php
$insert=false;
$servername="localhost";
$username="root";
$password="";
$database="job";

$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("sorry we failed to connect:". mysqli_connect_error());
}

if($_SERVER['REQUEST_METHOD']== 'POST'){
  $cname=$_POST["cname"];
  $position=$_POST["position"];
  $Jdesc=$_POST["Jdesc"];
  $skills=$_POST["skills"];
  $CTC=$_POST["CTC"];

  $sql="INSERT INTO `jobs`( `cname`, `position`, `Jdesc`,`skills`,`CTC`) VALUES ('$cname','$position','$Jdesc','$skills','$CTC')";
$result= mysqli_query($conn,$sql);

if($result){
  // echo"The record has been inserted successfully<br>";
  $insert=true;

}
else{
  echo"The record was not inserted successfully beacuse of error--->" . mysqli_error($conn);
}


}


?>

<?php include 'header.php'?>

<!-- Page content -->
<div class="content">
  <p>
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Post Job
  </a>

</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">

    <form action="/JOB_PORTAL/index.php" method="POST">
  <div class="mb-3">
    <label for="Company Name" class="form-label">Company Name</label>
    <input type="text" class="form-control" id="" aria-describedby="emailHelp" name="cname">

  </div>
  <div class="mb-3">
    <label for="exampleInputPosition" class="form-label">Position</label>
    <input type="text" class="form-control" id="position"  name="position">
  </div>


<div class="mb-3">
  <label for="JobDesc" class="form-label">Job Description</label>
  <input type="text" class="form-control" id="JobDesc" name="Jdesc">
</div>

<div class="mb-3">
  <label for="Skills" class="form-label">Skills require</label>
  <input type="text" class="form-control" id="skills" name="skills">
</div>



<div class="mb-3">
  <label for="CTC" class="form-label">CTC</label>
  <input type="text" class="form-control" id="CTC" name="CTC">
</div>

  <button type="submit" class="btn btn-primary" name="job">Submit</button>
</form>

  </div>
  </div>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">Sno.</th>
      <th scope="col">Company Name</th>
      <th scope="col">Position</th>
      <th scope="col">Job Description</th>
      <th scope="col">Skills</th>
      <th scope="col">CTC</th>
      

    </tr>
  </thead>
  <tbody>


    <?php
    $sql="SELECT * FROM `jobs`";
    $result= mysqli_query($conn,$sql);


      while($rows=mysqli_fetch_assoc($result)){

        echo "

        <tr>

        <th scope='row'>" . $rows['id'] ."</th>
        <td>".$rows['cname']."</td>
        <td>".$rows['position']."</td>
        <td>".$rows['Jdesc']."</td>
        <td>".$rows['skills']."</td>
        <td>".$rows['CTC']."</td>

        </tr>";

      }

     ?>

  </tbody>
</table>
</div>
<!-- </div> -->

    <!-- </div> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>
