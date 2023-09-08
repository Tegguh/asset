<?php include '../conn.php';

$id = $_GET['id'];
$sql = "SELECT * FROM assets WHERE `Id_Asset` = $id";
$result = $conn -> query($sql);

$rows=[];
foreach($result as $r ) {
	$rows[]=$r;
}

?>
<link rel="stylesheet" type="text/css" href="../style/.css">

<div id="judul-content">Add New Data</div>
<form method="POST" action="../models/edit.php">
	<input type="text" name="Id_Asset" value="<?= $id;?>" readonly style="display: none;">
	<table>
		<tr>
			<td>Asset</td>
			<td width="2px">:</td>
			<td>
				<input type="text" name="Asset" value="<?= $rows[0]['Asset'];?>">
			</td>
		</tr>

		<tr>
			<td>Asset_Code</td>
			<td width="2px">:</td>
			<td>
				<input type="text" name="Asset_Code" value="<?= $rows[0]['Asset_Code'];?>">
			</td>
		</tr>

		<tr>
			<td>Nama_Asset</td>
			<td width="2px">:</td>
			<td>
				<input type="text" name="Nama_Asset" value="<?= $rows[0]['Nama_Asset'];?>">
			</td>
		</tr>

		<tr>
			<td>E/C</td>
			<td width="2px">:</td>
			<td>
				<select name="E_C">
					<option value="E" <?= 	($rows[0]['E/C']=='E')?'SELECTED':'';?>>E</option>
					<option value="C" <?= 	($rows[0]['E/C']=='C')?'SELECTED':'';?>>C</option>
				</select>
			</td>
		</tr>

		<tr>
			<td>Brand</td>
			<td width="2px">:</td>
			<td>
				<input type="text" name="Brand" value="<?=$rows[0]['Brand'];?>">
			</td>
		</tr>

		<tr>
			<td>Model</td>
			<td width="2px">:</td>
			<td>
				<input type="text" name="Model" value="<?= $rows[0]['Model'];?>">
			</td>
		</tr>

		<tr>
			<td>S/N</td>
			<td width="2px">:</td>
			<td>
				<input type="text" name="S_N" value="<?= $rows[0]['S/N'];?>">
			</td>
		</tr>

		<tr>
			<td>Unit_Number</td>
			<td width="2px">:</td>
			<td>
				<input type="text" name="Unit_Number" value="<?= $rows[0]['Unit_Number'];?>">
			</td>
		</tr>

		<tr>
			<td>Asset_Number</td>
			<td width="2px">:</td>
			<td>
				<input type="text" name="Asset_Number" value="<?= $rows[0]['Asset_Number'];?>">
			</td>
		</tr>

		<tr>
			<td>MFG</td>
			<td width="2px">:</td>
			<td>
				<input type="number" name="MFG" minlength="4" min="2000" max="2030" value="<?= 	$rows[0]['MFG'];?>">
			</td>
		</tr>

		<tr>
			<td>Receive_Date</td>
			<td width="2px">:</td>
			<td>
				<input type="DATE" name="Receive_Date" value="<?= $rows[0]['Receive_Date'];?>">
			</td>
		</tr>

		<tr>
			<td>Site</td>
			<td width="2px">:</td>
			<td>
				<input type="text" name="Site" value="<?= $rows[0]['Site'];?>">
			</td>
		</tr>

		<tr>
			<td>Remark</td>
			<td width="2px">:</td>
			<td>
				<input type="text" name="Remark" value="<?= $rows[0]['Remarks'];?>">
			</td>
		</tr>

		<tr>
			<td>Status</td>
			<td width="2px">:</td>
			<td>
				<input type="text" name="Status" value="<?= $rows[0]['Status'];?>">
			</td>
		</tr>
	</table>

	<input type="submit">
	<input type="reset">
</form>

<style type="text/css">
	td{
		padding: 5px 0;
	}

	input[type="submit"],
	input[type="reset"]{
		padding: 3px 6px;
		margin-top: 5px;
	}
</style>