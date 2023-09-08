<?php include '../conn.php'; ?>
<link rel="stylesheet" type="text/css" href="../style/.css">

<div id="judul-content">Add New Data</div>
<form method="POST" action="../models/add.php">
	<table>
		<tr>
			<td>Asset</td>
			<td width="2px">:</td>
			<td>
				<input type="text" name="Asset">
			</td>
		</tr>

		<tr>
			<td>Asset_Code</td>
			<td width="2px">:</td>
			<td>
				<input type="text" name="Asset_Code">
			</td>
		</tr>

		<tr>
			<td>Nama_Asset</td>
			<td width="2px">:</td>
			<td>
				<input type="text" name="Nama_Asset">
			</td>
		</tr>

		<tr>
			<td>E/C</td>
			<td width="2px">:</td>
			<td>
				<select name="E_C">
					<option value="E">E</option>
					<option value="C">C</option>
				</select>
			</td>
		</tr>

		<tr>
			<td>Brand</td>
			<td width="2px">:</td>
			<td>
				<input type="text" name="Brand">
			</td>
		</tr>

		<tr>
			<td>Model</td>
			<td width="2px">:</td>
			<td>
				<input type="text" name="Model">
			</td>
		</tr>

		<tr>
			<td>S/N</td>
			<td width="2px">:</td>
			<td>
				<input type="text" name="S_N">
			</td>
		</tr>

		<tr>
			<td>Unit_Number</td>
			<td width="2px">:</td>
			<td>
				<input type="text" name="Unit_Number">
			</td>
		</tr>

		<tr>
			<td>Asset_Number</td>
			<td width="2px">:</td>
			<td>
				<input type="text" name="Asset_Number">
			</td>
		</tr>

		<tr>
			<td>MFG</td>
			<td width="2px">:</td>
			<td>
				<input type="number" name="MFG" minlength="4" max="2030">
			</td>
		</tr>

		<tr>
			<td>Receive_Date</td>
			<td width="2px">:</td>
			<td>
				<input type="DATE" name="Receive_Date">
			</td>
		</tr>

		<tr>
			<td>Site</td>
			<td width="2px">:</td>
			<td>
				<input type="text" name="Site">
			</td>
		</tr>

		<tr>
			<td>Remark</td>
			<td width="2px">:</td>
			<td>
				<input type="text" name="Remark">
			</td>
		</tr>

		<tr>
			<td>Status</td>
			<td width="2px">:</td>
			<td>
				<input type="text" name="Status">
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
	input[type="reset"],
	input[type="back"]{
		padding: 3px 6px;
		margin-top: 5px;
	}
</style>