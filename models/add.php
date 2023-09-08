<?php 

include '../conn.php';


$Asset= $_POST['Asset'];
$Asset_Code= $_POST['Asset_Code'];
$Nama_Asset= $_POST['Nama_Asset'];
$E_C= $_POST['E_C'];
$Brand= $_POST['Brand'];
$Model= $_POST['Model'];
$S_N= $_POST['S_N'];
$Unit_Number= $_POST['Unit_Number'];
$Asset_Number= $_POST['Asset_Number'];
$MFG=($_POST['MFG']=='')?'0000':$_POST['MFG'];
$Receive_Date=($_POST['Receive_Date']=='')?'0000-00-00':$_POST['Receive_Date'];
$Site= $_POST['Site'];
$Remarks= $_POST['Remark'];
$Status= $_POST['Status'];

$sql = "INSERT INTO `assets` (`Id_Asset`, `Asset_Code`, `Asset`, `Nama_Asset`, `E/C`, `Brand`, `Model`, `S/N`, `Unit_Number`, `Asset_Number`, `MFG`, `Receive_Date`, `Site`, `Remarks`, `Status`)
 VALUES (NULL, '$Asset_Code', '$Asset', '$Nama_Asset', '$E_C', '$Brand', '$Model', '$S_N', '$Unit_Number', '$Asset_Number', $MFG, '$Receive_Date', '$Site', '$Remarks', '$Status')"	;

if (mysqli_query($conn, $sql)) {
  header('Location:../pages/data_assets.php');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}