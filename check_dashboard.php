<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$kontak = $_POST['kontak'];
$alamat = $_POST['alamat'];
 
$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
	header("location:index.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], 'assets/img/'.$rand.'_'.$filename);
		mysqli_query($koneksi, "INSERT INTO user VALUES(NULL,'$nama','$kontak','$alamat','$img')");
		header("location:dashboard.php?alert=berhasil");
	}else{
		header("location:dashboard.php?alert=gagal_ukuran");
	}
}