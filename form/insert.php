<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="sweet\node_modules\sweetalert\dist\sweetalert.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert</title>
</head>
<body>
<?php 
if (isset($_POST['submit'])){
include('link.php');
$name = $_POST['name'];
$dob = $_POST['dob'];
global $conn;
$sql = "INSERT INTO `person` (`name`, `dob`) VALUES ('$name', '$dob');";
// echo $sql;
$data = mysqli_query($conn, $sql);
if ($data) {
// echo "New record created successfully";
?>
<script type="text/javascript">
    alert('New record created successfully');
    window.open('http://localhost/form/index.php','-self');
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

