<?php
include 'conexion.php';
$con = connect();

$id=$_GET['id'];


$sql = "DELETE FROM Students WHERE id = '$id'";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location:index.php");
}

?>