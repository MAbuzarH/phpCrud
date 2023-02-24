<?php  
// include("link.php");
require_once("getdata.php");
require_once("link.php");
$result = getdata();
// $sql = 'SELECT id , name , dob  FROM  person';
// $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>listing</title>
</head>
<body>
<table class="table text-center table-bordered">
  <thead class="table-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Dob</th>
      <th scope="col"> Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <tr>
  <?php
  while ($row = $result->fetch_assoc()){
?>
<td> <?php echo $row['id']; ?> </td>
<td>  <?php echo $row['name']; ?>  </td>
<td>  <?php echo $row['dob']; ?>  </td>
<td> <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-success" type="edit" name="edit" id="edit">Edit</a> </td>
<td> <a onclick="return confirm('Are you sure to delete this?')" href=" delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"  >Delete</a> </td>
    </tr>
    <?php }?>
  </tbody>
</table>
</body>
</html>

