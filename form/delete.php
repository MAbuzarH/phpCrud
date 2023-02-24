<?php
require_once('link.php');
$id = $_GET['id'];
global $conn;
$query="DELETE  FROM person WHERE id = $id";
$data = mysqli_query($conn, $query);
if ($data){
 ?>
 <script >
    alert("data deleted successfully");
    window.open('http://localhost/form/listing.php','_self');
 </script>  
 <?php 
}
else{
?>
<script>
alert("data not deleted successfully");

</script>
<?php } ?>