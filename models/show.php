<?php 

include '../conn.php';

$sql = "SELECT * FROM assets";

$result = $conn -> query($sql);
