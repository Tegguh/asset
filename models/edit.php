<?php 	

include '../conn.php';

$Id_Asset = $_POST['Id_Asset'];
$Asset_Code = $_POST['Asset_Code'];
$Asset = $_POST['Asset'];
$Nama_Asset = $_POST['Nama_Asset'];
$E_C = $_POST['E_C'];
$Brand = $_POST['Brand'];
$Model = $_POST['Model'];
$S_N = $_POST['S_N'];
$Unit_Number = $_POST['Unit_Number'];
$Asset_Number = $_POST['Asset_Number'];
$MFG = $_POST['MFG'];
$Receive_Date = $_POST['Receive_Date'];
$Site = $_POST['Site'];
$Remarks = $_POST['Remark'];
$Status = $_POST['Status'];

$sql = "UPDATE `assets` SET 
`Id_Asset`   = '$Id_Asset', 
`Asset_Code` = '$Asset_Code', 
`Asset` = '$Asset', 
`Nama_Asset` = '$Nama_Asset', 
`E/C` = '$E_C', 
`Brand` = '$Brand', 
`Model` = '$Model', 
`S/N` = '$S_N', 
`Unit_Number` = '$Unit_Number', 
`Asset_Number` = '$Asset_Number', 
`MFG` = '$MFG', 
`Receive_Date` = '$Receive_Date', 
`Site` = '$Site', 
`Remarks` = '$Remarks',
`Status` = '$Status' WHERE `assets`.`Id_Asset` = $Id_Asset";

if (mysqli_query($conn, $sql)) {
  header('Location:../pages/data_assets.php');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}