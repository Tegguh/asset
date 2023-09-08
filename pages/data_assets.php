<?php 
include '../conn.php';
include '../models/show.php'; ?>

<div id="judul-content">Data Assets Tahun 2023</div>
<div style="align-items: start;">
	<a href="./add.php">Add  New</a>
	<a href="../index.php">Menu</a>
</div>
<table id="data-show">
	<tr>
		<th>id asset</th>
		<th>Asset</th>
		<th>Nama Asset</th>
		<th>E/C</th>
		<th>Brand</th>
		<th>Model</th>
		<th>Unit Number</th>
		<th>Asset Number</th>
		<th>MFG</th>
		<th>Receive Date</th>
		<th>Site</th>
		<th>Remarks</th>
		<th>Status</th>
		<th>Action</th>
	</tr>

	<?php $i=0;foreach ($result as $r): ?>
	<tr>
		<td><?= ++$i;?></td>
	  <td><?= $r['Asset'];?></td>
	  <td><?= $r['Nama_Asset'];?></td>
	  <td><?= $r['E/C'];?></td>
	  <td><?= $r['Brand'];?></td>
		<td><?= $r['Model'];?></td>
		<td><?= $r['Unit_Number'];?></td>
		<td><?= $r['Asset_Number'];?></td>
		<?php if($r['MFG']=='0000'){ ?>
			<td></td>
		<?php } else{ ?>
			<td><?= $r['MFG'];?></td>
		<?php }if($r['Receive_Date']=='0000-00-00'){ ?>
			<td></td>
		<?php } else{ ?>
			<td><?= $r['Receive_Date'];?></td>
		<?php } ?>
		<td><?= $r['Site'];?></td>
		<td><?= $r['Remarks'];?></td>
		<td><?= $r['Status'];?></td>
		<td>
			<a href="./edit.php?id=<?= $r['Id_Asset'];?>">Edit</a> |
			<a href="../models/delete.php?id=<?= $r['Id_Asset'];?>">Delete</a>
		</td>
	</tr>
<?php endforeach; ?>
</table>

<style type="text/css">
	#judul-content{
		font-size: 1.5em;
		line-height: 80px;
		text-align: center;
		font-family: sans-serif;
	}
	
	#data-show tr>:is(th,td),
	#data-show{
		border: 1px solid black;
		padding: 3px;
		border-collapse: collapse;
	}

	#data-show tr>:is(th,td){
		font-size: .8em;
		text-align: center;
	}

	#data-show tr>th{
		background: indianred;
		color: white;
	}
</style>