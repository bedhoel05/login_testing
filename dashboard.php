<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
    if (isset($_SESSION['username'])) {
 
        echo "Nama pengguna: " . $_SESSION['username'];
     
    } else {
     
        echo "Tidak ada pengguna yang login.";
     
    }
    ?>
	<div class="container">
		<h2 style="text-align: center;">Tambah Data Pegawai</h2>
		<form action="check_dashboard.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Foto :</label>
				<input type="file" name="foto" required="required">
				<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
			</div>			
			<input type="submit" name="" value="Simpan" class="btn btn-primary">
		</form>
	</div>
 
</body>
</html>