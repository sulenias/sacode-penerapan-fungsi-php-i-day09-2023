<?php 
	

	$server = 'localhost';
	$name = 'root';
	$password = '';
	$db = 'php-fungsi';

	$koneksi = mysqli_connect($server, $name, $password, $db);

	// tampilkan data dari tabel
	$sql = 'SELECT * FROM petani';
	$petani = mysqli_query($koneksi, $sql);

	// var_dump($petani);


	// fungsi sederhana tanpa parameter
	function title()
	{
		echo '<h2> Data Petani Kopi </h2>';
	};


	// fungsi dengan menggunakan parameter
	function welcome($nama)
	{
		echo ' <p> Selamat Datang '. $nama.' </p> ';
	}


	function tambah($a, $b)
	{
		$c = $a + $b;
		echo '<p>'. $c . '</p>';
	}

	function kurang($a, $b)
	{
		$c = $a - $b;
		echo '<p>'. $c . '</p>';
	}

	function perkalian($a, $b)
	{
		$c = $a * $b;
		echo '<p>'. $c . '</p>';
	}

	function bagi($a, $b)
	{
		$c = $a / $b;
		echo '<p>'. $c . '</p>';
	}


 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> PHP - FUNGSI </title>
</head>
<body>

	<h1>PHP FUNGSI</h1>

	<?php echo title(); ?>

	<?php echo welcome('Acho'); ?>

	<!-- <?php echo tambah(16, 16); ?>
	<?php echo kurang(16, 16); ?>
	<?php echo perkalian(16, 16); ?>
	<?php echo bagi(16, 16); ?> -->

	<table>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Aksi</th>
		</tr>
		<tr>
			<?php $i=0; while($row = mysqli_fetch_assoc($petani)): ?>
			<tr>
				<td><?= ++$i ?></td>
				<td><?= $row['nama'] ?></td>
				<td><?= $row['email'] ?></td>
				<td>
					<a href="">Edit</a>
					<a href="">Delete</a>
				</td>
			</tr>
			<?php endwhile; ?>
		</tr>
	</table>

</body>
</html>