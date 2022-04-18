<?php 
$a=$_POST['nama'];
$b=$_POST['birthdate'];
$c=$_POST['jk'];
$d=$_POST['alamat'];
$e=$_POST['agama'];
$f=$_POST['pekerjaan'];
?>
<html>
<head>
	<title>Hasil Login</title>
</head>
<body>
<table border="1">
	<tr>
		<thead>
			<th>Nama</th>
			<th>Tempat/tanggal lahir</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
			<th>Agama</th>
			<th>Pekerjaan</th>
		</thead>
	</tr>
	<tr>
		<tbody>
			<th><?php echo $a; ?></th>
			<th><?php echo $b; ?></th>
			<th><?php echo $c; ?></th>
			<th><?php echo $d; ?></th>
			<th><?php echo $e; ?></th>
			<th><?php echo $f; ?></th>
		</tbody>
	</tr>
</table>
</body>
</html>