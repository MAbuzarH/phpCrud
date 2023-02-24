<?php 
require_once('link.php');

function getdata(){
    global $conn;
    $query = 'SELECT * FROM person';
    $result = mysqli_query($conn,$query);
    return $result;
}
?>