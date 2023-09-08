<?php 

include '../conn.php';

$id=$_GET['id'];
$sql = "DELETE FROM assets WHERE `Id_Asset` = $id";

var_dump($_GET['id']);

if (mysqli_query($conn, $sql)) {
  header('Location:../pages/data_assets.php');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
