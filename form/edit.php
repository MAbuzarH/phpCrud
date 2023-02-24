<?php 

include('head.php');
require_once("link.php");
$id = $_GET['id'];

$result ="SELECT * FROM person WHERE id='$id'";
global $conn;
$data = mysqli_query($conn,$result);
$row = mysqli_fetch_array($data);
// $row = $data -> fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
<form  method="post">
        <label for="name"> Enter Your name</label>
        <input
        
          type="text"
          name="nm"
          id="nm"
          value="<?php echo $row['name']; ?>"
          placeholder="Enter Your name"
        />
        <label for="dob"> Enter Your dob</label>
        <input
          type="date"
          name="db"
          id="db"
          value="<?php echo $row['dob']; ?>"
          placeholder="Enter your date of birth"
        />
        <button class="btn btn-primary m-2" type="save" name="update_btn" id="save" value="save">save</button>
        <button class="btn btn-info" type="view" name="view" id="view" value="view"> <a href="listing.php">Back</a></button>
       
      </form>
      <?php
      if (isset($_POST['update_btn'])){

          $nm = $_POST['nm'];
          $db = $_POST['db'];
  // $dob = $_GET['dob'];

  $update = "UPDATE `person` SET `name` = '$nm' , `dob` = '$db' WHERE `person`.`id` = $id";
  // echo $sql;
  $datanew = mysqli_query($conn, $update);
  if ($datanew) {
  // echo "New record created successfully";
  ?>
  <script type="text/javascript">
      alert('New record apdate successfully');
      window.open('http://localhost/form/listing.php','_self');
  </script>
  
  <?php
  }
  else {
      ?>
      <script type="text/javascript">
      alert('error');
  </script>
  
      <?php
  // echo "Error:".$sql."<br/>";
  }
}    
?>  
</body>
</html>
