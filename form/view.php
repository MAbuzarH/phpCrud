<?php
require_once("link.php");

// include('insert.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("head.php"); ?>
    <title>view</title>
</head>
<body>
<div>
<button class="btn btn-primary"> <a href="index.php"> Home</a></button>
<table class="table text-center table-striped .table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">DOB</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $query = "SELECT * FROM person";
    $data = mysqli_query($conn, $query);
    $result = mysqli_num_rows($data);
    if($result){
// echo 'disply';
while($row = mysqli_fetch_array($data)){  
  ?>
  <tr>
    <td> <?php echo $row['id'] ?> </td>
    <td> <?php echo $row['name'] ?> </td>
    <td> <?php echo $row['dob'] ?> </td>
  </tr>
<?php 
    }
  }
    else{
    ?>
    <tr>
   <p>no data found</p>
      
    </tr>
    <?php } ?>
   
  </tbody>
</table>
</div> 
</body>
</html>