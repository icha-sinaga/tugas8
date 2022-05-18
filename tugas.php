<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<title>FORMULIR PESERTA DIDIK</title>
	<style>
		.warning { color: #FF0000; }
	</style>
</head>
<body>
	<?php
	include "koneksi.php";
	function cek_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	} 
	$error_tanggal = "";
	$error_jenisdaftar = "";
	$error_tglmasuk = "";
	$error_nis = "";
	$error_nopes = "";
	$error_paud = "";
	$error_tk = "";
	$error_skhun = "";
	$error_ijazah = "";
	$error_hobi = "";
	$error_citacita = "";

	$error_nama = "";
	$error_gender = "";
	$error_nisn = "";
	$error_nik = "";
	$error_tmplahir = "";
	$error_tgllahir = "";
	$error_agama = "";
	$error_kebkhusus = "";
	$error_alamat = "";
	$error_rt = "";
	$error_rw = "";
	$error_dusun = "";
	$error_kel = "";
	$error_kec = "";
	$error_pos = "";
	$error_tmptinggal = "";
	$error_transport = "";
	$error_hp = "";
	$error_telp = "";
	$error_email = "";
	$error_kps = "";
	$error_nokps = "";
	$error_kwn = "";
	$error_negara ="";

	$error_namaayah = "";
	$error_lahirayah = "";
	$error_pendidikanayah = "";
	$error_kerjaayah = "";
	$error_hasilayah = "";
	$error_kebkhususayah = "";

	$error_namaibu = "";
	$error_lahiribu = "";
	$error_pendidikanibu = "";
	$error_kerjaibu = "";
	$error_hasilibu = "";
	$error_kebkhususibu = "";


	$tanggal = "";
	$jenisdaftar = "";
	$tglmasuk = "";
	$nis = "";
	$nopes = "";
	$paud = "";
	$tk = "";
	$skhun = "";
	$ijazah = "";
	$hobi = "";
	$citacita = "";

	$nama = "";
	$gender = "";
	$nisn = "";
	$nik = "";
	$tmplahir = "";
	$tgllahir = "";
	$agama = "";
	$kebkhusus = "";
	$alamat = "";
	$rt = "";
	$rw = "";
	$dusun = "";
	$kel = "";
	$kec = "";
	$pos = "";
	$tmptinggal = "";
	$transport = "";
	$hp = "";
	$telp = "";
	$email = "";
	$kps = "";
	$nokps = "";
	$kwn = "";
	$negara = "";

	$namaayah = "";
	$lahirayah = "";
	$pendidikanayah = "";
	$kerjaayah = "";
	$hasilayah = "";
	$kebkhususayah = "";

	$namaibu = "";
	$lahiribu = "";
	$pendidikanibu = "";
	$kerjaibu = "";
	$hasilibu = "";
	$kebkhususibu = "";	
	?>

	<div class="row">
	<div class="col-md-12">
	<div class="card">
		<div class="card-header bg-warning" align="center">
			FORMULIR PESERTA DIDIK
		</div>
	<div class="card-body">

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		
	<div class="form-group row">
		<label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
		<div class="col-sm-9">
			<input type="date" name="tanggal" class="form-control <?php echo ($error_telp !="" ? "is-invalid" : ""); ?>" id="tanggal" placeholder = "tanggal" value = "<?php echo $tanggal; ?>"><span class="warning"><?php echo $error_tanggal; ?></span>
			<br>
		</div>
	</div>

	<div class="card-header bg-info">
		REGISTRASI PESERTA DIDIK
	</div>
	<br>

	<div class="form-group row">
		<label for="jenisdaftar" class="col-sm-3 col-form-label">Jenis Pendaftaran</label>
		<div class="col-sm-9">
			<select class="form-control" name="jenisdaftar">
				<option>Pilih</option>
				<option value="1">Siswa Baru</option>
				<option value="2">Pindahan</option>
			</select>
			<br>
		</div>
	</div>

	<div class="form-group row">
		<label for="tglmasuk" class="col-sm-3 col-form-label">Tanggal Masuk</label>
		<div class="col-sm-9">
			<input type="date" name="tglmasuk" class="form-control <?php echo ($error_tglmasuk !="" ? "is-invalid" : ""); ?>" id="tglmasuk" placeholder = "Tanggal masuk sekolah" value = "<?php echo $tglmasuk; ?>"><span class="warning"><?php echo $error_tglmasuk; ?></span>
			<br>
		</div>
	</div>

	<div class="form-group row">
		<label for="nis" class="col-sm-3 col-form-label">NIS</label>
		<div class="col-sm-9">
			<input type="text" name="nis" class="form-control <?php echo ($error_nis !="" ? "is-invalid" : ""); ?>" id="nis" placeholder = "NIS" value = "<?php echo $nis; ?>"><span class="warning"><?php echo $error_nis; ?></span>
			<br>
		</div>
	</div>

	<div class="form-group row">
		<label for="nopes" class="col-sm-3 col-form-label">Nomor Peserta</label>
		<div class="col-sm-9">
			<input type="text" name="nopes" class="form-control <?php echo ($error_nopes !="" ? "is-invalid" : ""); ?>" id="nopes" placeholder = "20 Digit nomor peserta Ujian pada SKHUN" value = "<?php echo $nopes; ?>"><span class="warning"><?php echo $error_nopes; ?></span>
			<br>
		</div>
	</div>

	<div class="form-group row">
		<label for="paud" class="col-sm-3 col-form-label">Apakah Pernah PAUD?</label>
		<div class="col-sm-9">
			<select class="form-control" name="paud">
				<option>Pilih</option>
				<option value="1">Ya</option>
				<option value="2">Tidak</option>
			</select>
			<br>
		</div>
	</div>

	<div class="form-group row">
		<label for="tk" class="col-sm-3 col-form-label">Apakah Pernah TK?</label>
		<div class="col-sm-9">
			<select class="form-control" name="tk">
				<option>Pilih</option>
				<option value="1">Ya</option>
				<option value="2">Tidak</option>
			</select>
			<br>
		</div>
	</div>

	<div class="form-group row">
		<label for="nopes" class="col-sm-3 col-form-label">No. Seri SKHUN Sebelumnya</label>
		<div class="col-sm-9">
			<input type="text" name="skhun" class="form-control <?php echo ($error_nopes !="" ? "is-invalid" : ""); ?>" id="skhun" placeholder = "16 digit nomor pada SKHUN" value = "<?php echo $skhun; ?>"><span class="warning"><?php echo $error_skhun; ?></span>
			<br>
		</div>
	</div>

	<div class="form-group row">
		<label for="ijazah" class="col-sm-3 col-form-label">No. Seri Ijazah Sebelumnya</label>
		<div class="col-sm-9">
			<input type="text" name="ijazah" class="form-control <?php echo ($error_ijazah !="" ? "is-invalid" : ""); ?>" id="ijazah" placeholder = "16 digit nomor pada SKHUN" value = "<?php echo $ijazah; ?>"><span class="warning"><?php echo $error_ijazah; ?></span>
			<br>
		</div>
	</div>

	<div class="form-group row">
		<label for="hobi" class="col-sm-3 col-form-label">Hobi</label>
		<div class="col-sm-9">
			<select class="form-control" name="hobi">
				<option>Pilih</option>
				<option value="1">Olahraga</option>
				<option value="2">Kesenian</option>
				<option value="3">Membaca</option>
				<option value="4">Menulis</option>
				<option value="5">Travellin</option>
				<option value="6">Lainnya</option>
			</select>
			<br>
		</div>
	</div>

	<div class="form-group row">
		<label for="citacita" class="col-sm-3 col-form-label">Cita-cita</label>
		<div class="col-sm-9">
			<select class="form-control" name="hobi">
				<option>Pilih</option>
				<option value="1">PNS</option>
				<option value="2">TNI/POLRI</option>
				<option value="3">Guru/Dosen</option>
				<option value="4">Dokter</option>
				<option value="5">Politikus</option>
				<option value="6">Wiraswasta</option>
				<option value="7">Seni/Lukis/Artis/Sejenis</option>
				<option value="8">Lainnya</option>
			</select>
			<br>
		</div>
	</div>

		<div class="card-header bg-info">
			DATA PRIBADI
		</div>
		<br>

	<div class="form-group row">
		<label for="nama" class="col-sm-3 col-form-label">Nama</label>
		<div class="col-sm-9">
			<input type="text" name="nama" class="form-control <?php echo ($error_nama !="" ? "is-invalid" : ""); ?>" id="nama" placeholder = "Nama" value = "<?php echo $nama; ?>"><span class="warning"><?php echo $error_nama; ?></span>
			<br>
		</div>
	</div>

	<div class="form-group row">
		<label for="gender" class="col-sm-3 col-form-label">Jenis Kelamin</label>
		<div class="col-sm-9">
			<select class="form-control" name="gender">
				<option>Pilih</option>
				<option value="1">Laki-laki</option>
				<option value="2">Perempuan</option>
			</select>
			<br>
		</div>
	</div>

	<div class="form-group row">
		<label for="nisn" class="col-sm-3 col-form-label">NISN</label>
		<div class="col-sm-9">
			<input type="text" name="nisn" class="form-control <?php echo ($error_nisn !="" ? "is-invalid" : ""); ?>" id="nisn" placeholder = "NISN" value = "<?php echo $nisn; ?>"><span class="warning"><?php echo $error_nisn; ?></span>
			<br>
		</div>
	</div>

	<div class="form-group row">
		<label for="nik" class="col-sm-3 col-form-label">NIK</label>
		<div class="col-sm-9">
			<input type="text" name="nik" class="form-control <?php echo ($error_nik !="" ? "is-invalid" : ""); ?>" id="nik" placeholder = "NIK" value = "<?php echo $nik; ?>"><span class="warning"><?php echo $error_nik; ?></span>
			<br>
		</div>
	</div>

	<div class="form-group row">
		<label for="tmplahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
		<div class="col-sm-9">
			<input type="text" name="tmplahir" class="form-control <?php echo ($error_tmplahir !="" ? "is-invalid" : ""); ?>" id="tmplahir" placeholder = "Tempat Lahir" value = "<?php echo $tmplahir; ?>"><span class="warning"><?php echo $error_tmplahir; ?></span>
			<br>
		</div>
	</div>

	<div class="form-group row">
		<label for="tgllahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
		<div class="col-sm-9">
			<input type="date" name="tgllahir" class="form-control <?php echo ($error_tgllahir !="" ? "is-invalid" : ""); ?>" id="tgllahir" placeholder = "Tanggal Lahir" value = "<?php echo $tgllahir; ?>"><span class="warning"><?php echo $error_tgllahir; ?></span>
			<br>
		</div>
	</div>

	<div class="form-group row">
		<label for="agama" class="col-sm-3 col-form-label">Agama</label>
		<div class="col-sm-9">
			<select class="form-control" name="agama">
				<option>Pilih</option>
				<option value="1">Islam</option>
				<option value="2">Kristem Protestan</option>
				<option value="3">Katholik</option>
				<option value="4">Hindu</option>
				<option value="5">Buddha</option>
				<option value="6">Khong Hu Chu</option>
				<option value="7">Lainnya</option>			
			</select>
			<br>
		</div>
	</div>

	<div class="form-group row">
		<label for="kebkhusus" class="col-sm-3 col-form-label">Berkebutuhan Khusus</label>
		<div class="col-sm-9">
			<select class="form-control" name="kebkhusus">
				<option>Pilih</option>
				<option value="1">Tidak</option>
				<option value="2">Netra</option>
				<option value="3">Runggu</option>
				<option value="4">Grahita Ringan</option>
				<option value="5">Grahita Sedang</option>
				<option value="6">Daksa Ringan</option>
				<option value="7">Daksa Sedang</option>	
				<option value="8">Laras</option>			
				<option value="9">Wicara</option>	
				<option value="10">Tuna Ganda</option>	
				<option value="11">Hiperaktif</option>	
				<option value="12">Cerdas Istimewa</option>	
				<option value="13">Bakat Istimewa</option>	
				<option value="14">Kesulitan Belajar</option>	
				<option value="15">Narkoba</option>	
				<option value="16">Indigo</option>
				<option value="17">Down Sindrome</option>
				<option value="18">Autis</option>
			</select>
			<br>
		</div>
	</div>

	<div class="form-group row">
		<label for="alamat" class="col-sm-3 col-form-label">Alamat Jalan</label>
		<div class="col-sm-9">
			<input type="text" name="alamat" class="form-control <?php echo ($error_alamat !="" ? "is-invalid" : ""); ?>" id="alamat" placeholder = "Alamat" value = "<?php echo $alamat; ?>"><span class="warning"><?php echo $error_alamat; ?></span>
			<br>
		</div>
	</div>

	<div class="form-group row">
		<label for="rt" class="col-sm-3 col-form-label">RT</label>
		<div class="col-sm-9">
			<input type="text" name="rt" class="form-control <?php echo ($error_rt !="" ? "is-invalid" : ""); ?>" id="rt" placeholder = "RT" value = "<?php echo $rt; ?>"><span class="warning"><?php echo $error_rt; ?></span>
			<br>
		</div>
	</div>

	<div class="form-group row">
		<label for="rw" class="col-sm-3 col-form-label">RW</label>
		<div class="col-sm-9">
			<input type="text" name="rw" class="form-control <?php echo ($error_rw !="" ? "is-invalid" : ""); ?>" id="rw" placeholder = "RW" value = "<?php echo $rw; ?>"><span class="warning"><?php echo $error_rw; ?></span>
			<br>
		</div>
	</div>

	<div class="form-group row">
		<label for="dusun" class="col-sm-3 col-form-label">Nama Dusun</label>
		<div class="col-sm-9">
			<input type="text" name="dusun" class="form-control <?php echo ($error_dusun !="" ? "is-invalid" : ""); ?>" id="dusun" placeholder = "Dusun" value = "<?php echo $dusun; ?>"><span class="warning"><?php echo $error_dusun; ?></span>
			<br>
		</div>
	</div>

	<div class="form-group row">
		<label for="kel" class="col-sm-3 col-form-label">Kel/Desa</label>
		<div class="col-sm-9">
			<input type="text" name="kel" class="form-control <?php echo ($error_kel !="" ? "is-invalid" : ""); ?>" id="kel" placeholder = "Kelurahan/Desa" value = "<?php echo $kel; ?>"><span class="warning"><?php echo $error_kel; ?></span>
			<br>
		</div>
	</div>

	<div class="form-group row">
		<label for="kec" class="col-sm-3 col-form-label">Kecamatan</label>
		<div class="col-sm-9">
			<input type="text" name="kec" class="form-control <?php echo ($error_kec !="" ? "is-invalid" : ""); ?>" id="kec" placeholder = "Kecamatan" value = "<?php echo $kec; ?>"><span class="warning"><?php echo $error_kec; ?></span>
			<br>
		</div>
	</div>

	<div class="form-group row">
		<label for="pos" class="col-sm-3 col-form-label">Kode Pos</label>
		<div class="col-sm-9">
			<input type="text" name="pos" class="form-control <?php echo ($error_pos !="" ? "is-invalid" : ""); ?>" id="pos" placeholder = "Kode Pos" value = "<?php echo $pos; ?>"><span class="warning"><?php echo $error_pos; ?></span>
			<br>
		</div>
	</div>

	<div class="form-group row">
		<label for="tmptinggal" class="col-sm-3 col-form-label">Tempat Tinggal</label>
		<div class="col-sm-9">
			<select class="form-control" name="tmptinggal">
				<option>Pilih</option>
				<option value="1">Bersama Orang Tua</option>
				<option value="2">Wali</option>
				<option value="3">Kos</option>
				<option value="4">Asrama</option>
				<option value="5">Panti Asuhan</option>
				<option value="6">Lainnya</option>
			</select>
			<br>
		</div>
	</div>

	<div class="form-group row">
		<label for="transport" class="col-sm-3 col-form-label">Moda Transportasi</label>
		<div class="col-sm-9">
			<select class="form-control" name="transport">
				<option>Pilih</option>
				<option value="1">Jalan Kaki</option>
				<option value="2">Kendaraan Pribadi</option>
				<option value="3">Kendaraan Umum/Angkot/Pete-pete</option>
				<option value="4">Jemputan Sekolah</option>
				<option value="5">Kereta Api</option>
				<option value="6">Ojek</option>
				<option value="7">Andong/Bendi/Sado/Dokar/Delman/Beca</option>	
				<option value="8">Perahu Penyebrangan/Rakit/Getek</option>
				<option value="9">Lainnya</option>		
			</select>
			<br>
		</div>
	</div>

	<div class="form-group row">
		<label for="hp" class="col-sm-3 col-form-label">Nomor HP</label>
		<div class="col-sm-9">
			<input type="text" name="hp" class="form-control <?php echo ($error_hp !="" ? "is-invalid" : ""); ?>" id="hp" placeholder = "Nomor HP" value = "<?php echo $hp; ?>"><span class="warning"><?php echo $error_hp; ?></span>
			<br>
		</div>
	</div>

	<div class="form-group row">
		<label for="telp" class="col-sm-3 col-form-label">Telepon</label>
		<div class="col-sm-9">
			<input type="text" name="telp" class="form-control <?php echo ($error_telp !="" ? "is-invalid" : ""); ?>" id="telp" placeholder = "Telepon" value = "<?php echo $telp; ?>"><span class="warning"><?php echo $error_telp; ?></span>
			<br>
		</div>
	</div>

	<div class="form-group row">
		<label for="email" class="col-sm-3 col-form-label">E-mail Pribadi</label>
		<div class="col-sm-9">
			<input type="text" name="email" class="form-control <?php echo ($error_email !="" ? "is-invalid" : ""); ?>" id="email" placeholder = "Email" value = "<?php echo $email; ?>"><span class="warning"><?php echo $error_email; ?></span>
			<br>
		</div>
	</div>

	<div class="form-group row">
		<label for="kps" class="col-sm-3 col-form-label">Penerima KPS/KKS/PKH/KIP</label>
		<div class="col-sm-9">
			<select class="form-control" name="kps">
				<option>Pilih</option>
				<option value="1">Ya</option>
				<option value="2">Tidak</option>
			</select>
			<br>
		</div>
	</div>

	<div class="form-group row">
		<label for="nokps" class="col-sm-3 col-form-label">No. KPS/KKS/PKH/KIP</label>
		<div class="col-sm-9">
			<input type="text" name="nokps" class="form-control <?php echo ($error_nokps !="" ? "is-invalid" : ""); ?>" id="nokps" placeholder = "Isi - apabila bukan penerima" value = "<?php echo $nokps; ?>"><span class="warning"><?php echo $error_nokps; ?></span>
			<br>
		</div>
	</div>

	<div class="form-group row">
		<label for="kps" class="col-sm-3 col-form-label">Kewarganegaraan</label>
		<div class="col-sm-3">
			<select class="form-control" name="kwn">
				<option>Pilih</option>
				<option value="1">Indonesia (WNI)</option>
				<option value="2">Asing (WNA)</option>
			</select>
			<br>
		</div>
		<div class="col-sm-6">
			<input type="text" name="negara" class="form-control <?php echo ($error_negara !="" ? "is-invalid" : ""); ?>" id="negara" placeholder = "Isi - jika WNI" value = "<?php echo $negara; ?>"><span class="warning"><?php echo $error_negara; ?></span>
			<br>
		</div>
	</div>

		<div class="card-header bg-info">
			DATA AYAH KANDUNG
		</div>
		<br>

	<div class="form-group row">
		<label for="namaayah" class="col-sm-3 col-form-label">Nama Ayah Kandung</label>
		<div class="col-sm-9">
			<input type="text" name="namaayah" class="form-control <?php echo ($error_namaayah !="" ? "is-invalid" : ""); ?>" id="namaayah" placeholder = "Nama Ayah Kandung" value = "<?php echo $namaayah; ?>"><span class="warning"><?php echo $error_namaayah; ?></span>
			<br>
		</div>
	</div>

	<div class="form-group row">
		<label for="lahirayah" class="col-sm-3 col-form-label">Tahun Lahir</label>
		<div class="col-sm-9">
			<input type="text" name="lahirayah" class="form-control <?php echo ($error_lahirayah !="" ? "is-invalid" : ""); ?>" id="lahirayah" placeholder = "Tahun Kelahiran Ayah Kandung" value = "<?php echo $lahirayah; ?>"><span class="warning"><?php echo $error_lahirayah; ?></span>
			<br>
		</div>
	</div>

	<div class="form-group row">
		<label for="pendidikanayah" class="col-sm-3 col-form-label">Pendidikan</label>
		<div class="col-sm-9">
			<select class="form-control" name="pendidikanayah">
				<option>Pilih</option>
				<option value="1">Tidak Sekolah</option>
				<option value="2">Putus SD</option>
				<option value="3">SD Sederajat</option>
				<option value="4">SMP Sederajat</option>
				<option value="5">SMA Sederajat</option>
				<option value="6">D1</option>
				<option value="7">D2</option>	
				<option value="8">D3</option>
				<option value="9">D4/S1</option>
				<option value="10">S2</option>	
				<option value="11">S3</option>	
			</select>
			<br>
		</div>
	</div>

	<div class="form-group row">
		<label for="kerjaayah" class="col-sm-3 col-form-label">Pekerjaan</label>
		<div class="col-sm-9">
			<select class="form-control" name="kerjaayah">
				<option>Pilih</option>
				<option value="1">Tidak Bekerja</option>
				<option value="2">Nelayan</option>
				<option value="3">Peternak</option>
				<option value="4">PNS/TNI/POLRI</option>
				<option value="5">Karyawan Swasta</option>
				<option value="6">Pedagang Kecil</option>
				<option value="7">Pedagang Besar</option>	
				<option value="8">Wiraswasta</option>
				<option value="9">Wirausaha</option>
				<option value="10">Buruh</option>	
				<option value="11">Pensiunan</option>
				<option value="12">Lain-lain</option>		
			</select>
			<br>
		</div>
	</div>

	<div class="form-group row">
		<label for="hasilayah" class="col-sm-3 col-form-label">Penghasilan</label>
		<div class="col-sm-9">
			<select class="form-control" name="hasilayah">
				<option>Pilih</option>
				<option value="1">Kurang dari 500.000</option>
				<option value="2">500.000 - 999.999</option>
				<option value="3">1 Juta - 1.999.999</option>
				<option value="4">2 Juta - 4.999.999</option>
				<option value="5">5 Juta - 20 Juta</option>
				<option value="6">Lebih dari 20 Juta</option>
			</select>
			<br>
		</div>
	</div>

		<div class="form-group row">
		<label for="kebkhususayah" class="col-sm-3 col-form-label">Berkebutuhan Khusus</label>
		<div class="col-sm-9">
			<select class="form-control" name="kebkhususayah">
				<option>Pilih</option>
				<option value="1">Tidak</option>
				<option value="2">Netra</option>
				<option value="3">Runggu</option>
				<option value="4">Grahita Ringan</option>
				<option value="5">Grahita Sedang</option>
				<option value="6">Daksa Ringan</option>
				<option value="7">Daksa Sedang</option>	
				<option value="8">Laras</option>			
				<option value="9">Wicara</option>	
				<option value="10">Tuna Ganda</option>	
				<option value="11">Hiperaktif</option>	
				<option value="12">Cerdas Istimewa</option>	
				<option value="13">Bakat Istimewa</option>	
				<option value="14">Kesulitan Belajar</option>	
				<option value="15">Narkoba</option>	
				<option value="16">Indigo</option>
				<option value="17">Down Sindrome</option>
				<option value="18">Autis</option>
			</select>
			<br>
		</div>
	</div>

		<div class="card-header bg-info">
			DATA IBU KANDUNG

		</div>
		<br>

	<div class="form-group row">
		<label for="namaibu" class="col-sm-3 col-form-label">Nama Ibu Kandung</label>
		<div class="col-sm-9">
			<input type="text" name="namaibu" class="form-control <?php echo ($error_namaibu !="" ? "is-invalid" : ""); ?>" id="namaibu" placeholder = "Nama Ibu Kandung" value = "<?php echo $namaibu; ?>"><span class="warning"><?php echo $error_namaibu; ?></span>
			<br>
		</div>
	</div>

	<div class="form-group row">
		<label for="lahiribu" class="col-sm-3 col-form-label">Tahun Lahir</label>
		<div class="col-sm-9">
			<input type="text" name="lahiribu" class="form-control <?php echo ($error_lahirayah !="" ? "is-invalid" : ""); ?>" id="lahiribu" placeholder = "Tahun Kelahiran Ibu Kandung" value = "<?php echo $lahiribu; ?>"><span class="warning"><?php echo $error_lahiribu; ?></span>
			<br>
		</div>
	</div>

	<div class="form-group row">
		<label for="pendidikanibu" class="col-sm-3 col-form-label">Pendidikan</label>
		<div class="col-sm-9">
			<select class="form-control" name="pendidikanibu">
				<option>Pilih</option>
				<option value="1">Tidak Sekolah</option>
				<option value="2">Putus SD</option>
				<option value="3">SD Sederajat</option>
				<option value="4">SMP Sederajat</option>
				<option value="5">SMA Sederajat</option>
				<option value="6">D1</option>
				<option value="7">D2</option>	
				<option value="8">D3</option>
				<option value="9">D4/S1</option>
				<option value="10">S2</option>	
				<option value="11">S3</option>	
			</select>
			<br>
		</div>
	</div>

	<div class="form-group row">
		<label for="kerjaibu" class="col-sm-3 col-form-label">Pekerjaan</label>
		<div class="col-sm-9">
			<select class="form-control" name="kerjaibu">
				<option>Pilih</option>
				<option value="1">Tidak Bekerja</option>
				<option value="2">Nelayan</option>
				<option value="3">Peternak</option>
				<option value="4">PNS/TNI/POLRI</option>
				<option value="5">Karyawan Swasta</option>
				<option value="6">Pedagang Kecil</option>
				<option value="7">Pedagang Besar</option>	
				<option value="8">Wiraswasta</option>
				<option value="9">Wirausaha</option>
				<option value="10">Buruh</option>	
				<option value="11">Pensiunan</option>
				<option value="12">Lain-lain</option>		
			</select>
			<br>
		</div>
	</div>

	<div class="form-group row">
		<label for="hasilaibu" class="col-sm-3 col-form-label">Penghasilan</label>
		<div class="col-sm-9">
			<select class="form-control" name="hasilibu">
				<option>Pilih</option>
				<option value="1">Kurang dari 500.000</option>
				<option value="2">500.000 - 999.999</option>
				<option value="3">1 Juta - 1.999.999</option>
				<option value="4">2 Juta - 4.999.999</option>
				<option value="5">5 Juta - 20 Juta</option>
				<option value="6">Lebih dari 20 Juta</option>
			</select>
			<br>
		</div>
	</div>

		<div class="form-group row">
		<label for="kebkhususibu" class="col-sm-3 col-form-label">Berkebutuhan Khusus</label>
		<div class="col-sm-9">
			<select class="form-control" name="kebkhususayah">
				<option>Pilih</option>
				<option value="1">Tidak</option>
				<option value="2">Netra</option>
				<option value="3">Runggu</option>
				<option value="4">Grahita Ringan</option>
				<option value="5">Grahita Sedang</option>
				<option value="6">Daksa Ringan</option>
				<option value="7">Daksa Sedang</option>	
				<option value="8">Laras</option>			
				<option value="9">Wicara</option>	
				<option value="10">Tuna Ganda</option>	
				<option value="11">Hiperaktif</option>	
				<option value="12">Cerdas Istimewa</option>	
				<option value="13">Bakat Istimewa</option>	
				<option value="14">Kesulitan Belajar</option>	
				<option value="15">Narkoba</option>	
				<option value="16">Indigo</option>
				<option value="17">Down Sindrome</option>
				<option value="18">Autis</option>
			</select>
			<br>
		</div>
	</div>

	<div class="form-group row">
		<div class="col-sm-10">
		</div>
		<div class="col-sm-2" align="right">
			<button type="submit" class="btn btn-primary" >Daftar</button>
			<button type="reset" class="btn btn-primary">Reset</button>
		</div>
	</div>
	</form>

	</div>
	</div>
	</div>
	</div>


<?
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["tanggal"])) {
			$error_tanggal = "Tanggal tidak boleh kosong";
		} else {
			$tanggal = cek_input($_POST["tanggal"]);
			}

	if (empty($_POST["jenisdaftar"])) {
			$error_jenisdaftar = "Pilihan tidak boleh kosong";
		} else {
			$jenisdaftar = cek_input($_POST["jenisdaftar"]);
			}

	if (empty($_POST["tglmasuk"])) {
			$error_tglmasuk = "Tanggal Masuk tidak boleh kosong";
		} else {
			$tglmasuk = cek_input($_POST["tglmasuk"]);
			}

	if (empty($_POST["nis"])) {
			$error_nis = "NIS tidak boleh kosong";
		} else {
			$nis = cek_input($_POST["nis"]);
			if (!is_numeric($nis)) {
				$error_nis = 'NIS hanya boleh angka';
			}
		}
	
	if (empty($_POST["nopes"])) {
			$error_nopes = "Nomor peserta tidak boleh kosong";
		} else {
			$nopes = cek_input($_POST["nopes"]);
			if (!is_numeric($nopes)) {
				$error_nopes = 'Nomor peserta hanya boleh angka';
			}
		}

	if (empty($_POST["paud"])) {
			$error_paud = "Pilihan tidak boleh kosong";
		} else {
			$paud = cek_input($_POST["paud"]);
			}

	if (empty($_POST["tk"])) {
			$error_tk = "Pilihan tidak boleh kosong";
		} else {
			$tk = cek_input($_POST["tk"]);
			}

	if (empty($_POST["skhun"])) {
			$error_skhun = "Nomor Seri SKHUN tidak boleh kosong";
		} else {
			$skhun = cek_input($_POST["skhun"]);
			if (!is_numeric($skhun)) {
				$error_skhun = 'Nomor Seri SKHUN hanya boleh angka';
			}
		}

	if (empty($_POST["ijazah"])) {
			$error_ijazah = "Nomor Seri Ijazah tidak boleh kosong";
		} else {
			$ijazah = cek_input($_POST["ijazah"]);
			if (!is_numeric($ijazah)) {
				$error_ijazah = 'Nomor Seri Ijazah hanya boleh angka';
			}
		}

	if (empty($_POST["hobi"])) {
			$error_hobi = "Hobi tidak boleh kosong";
		} else {
			$hobi= cek_input($_POST["hobi"]);
			}

	if (empty($_POST["citacita"])) {
			$error_citacita = "Pilihan tidak boleh kosong";
		} else {
			$citacita = cek_input($_POST["citacita"]);
			}


	if (empty($_POST["nama"])) {
			$error_nama = "Nama tidak boleh kosong";
		} else {
			$nama = cek_input($_POST["nama"]);
			if (!preg_match("/^[a-zA-Z ]*$/", $nama)) {
				$namaErr = "Inputan hanya boleh huruf dan spasi";
			}
		}

	if (empty($_POST["gender"])) {
			$error_gender = "Pilihan tidak boleh kosong";
		} else {
			$gender = cek_input($_POST["gender"]);
			}

	if (empty($_POST["nisn"])) {
			$error_nisn = "NISN tidak boleh kosong";
		} else {
			$nisn = cek_input($_POST["nisn"]);
			if (!is_numeric($nisn)) {
				$error_nisn = 'NISN hanya boleh angka';
			}
		}

	if (empty($_POST["nik"])) {
			$error_nisn = "NIK tidak boleh kosong";
		} else {
			$nik = cek_input($_POST["nik"]);
			if (!is_numeric($nik)) {
				$error_nik = 'NIK hanya boleh angka';
			}
		}

	if (empty($_POST["tmplahir"])) {
			$error_tmplahir = "Tempat lahir tidak boleh kosong";
		} else {
			$tmplahir = cek_input($_POST["tmplahir"]);
			if (!preg_match("/^[a-zA-Z ]*$/", $tmplahir)) {
				$tmplahirErr = "Inputan hanya boleh huruf dan spasi";
			}
		}

	if (empty($_POST["tgllahir"])) {
			$error_tgllahir = "Tanggal lahir tidak boleh kosong";
		} else {
			$tgllahir = cek_input($_POST["tgllahir"]);
			}

	if (empty($_POST["agama"])) {
			$error_agama = "Agama tidak boleh kosong";
		} else {
			$agama= cek_input($_POST["agama"]);
			}

	if (empty($_POST["kebkhusus"])) {
			$error_kebkhusus = "Pilihan tidak boleh kosong";
		} else {
			$kebkhusus = cek_input($_POST["kebkhusus"]);
			}

	if (empty($_POST["alamat"])) {
			$error_alamat = "Alamat tidak boleh kosong";
		} else {
			$alamat = cek_input($_POST["alamat"]);
			if (!preg_match("/^[a-zA-Z ]*$/", $alamat)) {
				$alamatErr = "Inputan hanya boleh huruf dan spasi";
			}
		}

	if (empty($_POST["rt"])) {
			$error_rt = "RT tidak boleh kosong";
		} else {
			$rt = cek_input($_POST["rt"]);
			if (!is_numeric($rt)) {
				$error_rt = 'RT hanya boleh angka';
			}
		}

	if (empty($_POST["rw"])) {
			$error_rw = "RW tidak boleh kosong";
		} else {
			$rw = cek_input($_POST["rw"]);
			if (!is_numeric($rw)) {
				$error_rw = 'RW hanya boleh angka';
			}
		}

	if (empty($_POST["dusun"])) {
			$error_dusun = "Dusun tidak boleh kosong";
		} else {
			$dusun = cek_input($_POST["dusun"]);
			if (!preg_match("/^[a-zA-Z ]*$/", $dusun)) {
				$dusunErr = "Inputan hanya boleh huruf dan spasi";
			}
		}

	if (empty($_POST["kel"])) {
			$error_kel = "Kelurahan/Desa tidak boleh kosong";
		} else {
			$kel = cek_input($_POST["kel"]);
			if (!preg_match("/^[a-zA-Z ]*$/", $kel)) {
				$kelErr = "Inputan hanya boleh huruf dan spasi";
			}
		}

	if (empty($_POST["kec"])) {
			$error_kec = "Kecamatan tidak boleh kosong";
		} else {
			$kec = cek_input($_POST["kec"]);
			if (!preg_match("/^[a-zA-Z ]*$/", $kec)) {
				$kecErr = "Inputan hanya boleh huruf dan spasi";
			}
		}

	if (empty($_POST["pos"])) {
			$error_pos = "Kode Pos tidak boleh kosong";
		} else {
			$pos = cek_input($_POST["pos"]);
			if (!is_numeric($pos)) {
				$error_pos = 'Kode Pos hanya boleh angka';
			}
		}

	if (empty($_POST["tmptinggal"])) {
			$error_tmptinggal = "Pilihan tidak boleh kosong";
		} else {
			$tmptinggal = cek_input($_POST["tmptinggal"]);
			}

	if (empty($_POST["transport"])) {
			$error_transport = "Pilihan tidak boleh kosong";
		} else {
			$transport = cek_input($_POST["transport"]);
			}

	if (empty($_POST["hp"])) {
			$error_hp = "Nomor HP tidak boleh kosong";
		} else {
			$hp = cek_input($_POST["hp"]);
			if (!is_numeric($hp)) {
				$error_hp = 'Nomor HP hanya boleh angka';
			}
		}

	if (empty($_POST["telp"])) {
			$error_telp = "Telepon tidak boleh kosong";
		} else {
			$telp = cek_input($_POST["telp"]);
			if (!is_numeric($telp)) {
				$error_telp = 'Nomor HP hanya boleh angka';
			}
		}

	if (empty($_POST["email"])) {
			$error_email = "Email tidak boleh kosong";
		} else {
			$email = cek_input($_POST["email"]);
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$error_email = "Format email invalid";
			}
		}

	if (empty($_POST["kps"])) {
			$error_kps = "Pilihan tidak boleh kosong";
		} else {
			$kps = cek_input($_POST["kps"]);
			} 

	if (empty($_POST["nokps"])) {
			$error_nokps = "Kolom tidak boleh kosong";
		} else {
			$nokps = cek_input($_POST["nokps"]);
			} 

	if (empty($_POST["kwn"])) {
			$error_kwn = "Pilihan tidak boleh kosong";
		} else {
			$kwn = cek_input($_POST["kwn"]);
			}

	if (empty($_POST["negara"])) {
			$error_negara = "Kolom tidak boleh kosong";
		} else {
			$negara = cek_input($_POST["negara"]);
			} 

	if (empty($_POST["namaayah"])) {
			$error_namaayah = "Nama ayah tidak boleh kosong";
		} else {
			$namaayah = cek_input($_POST["namaayah"]);
			if (!preg_match("/^[a-zA-Z ]*$/", $namaayah)) {
				$namaayahErr = "Inputan hanya boleh huruf dan spasi";
			}
		}

	if (empty($_POST["lahirayah"])) {
			$error_lahirayah = "Tahun lahir ayah tidak boleh kosong";
		} else {
			$lahirayah = cek_input($_POST["lahirayah"]);
			if (!is_numeric($nokps)) {
				$error_lahirayah = 'Tahun kelahiran hanya boleh angka';
			}
		}

	if (empty($_POST["pendidikanayah"])) {
			$error_pendidikanayah = "Pilihan tidak boleh kosong";
		} else {
			$pendidikanayah = cek_input($_POST["pendidikanayah"]);
			}

	if (empty($_POST["kerjaayah"])) {
			$error_kerjaayah = "Pilihan tidak boleh kosong";
		} else {
			$kerjaayah = cek_input($_POST["kerjaayah"]);
			}

	if (empty($_POST["hasilayah"])) {
			$error_hasilayah = "Pilihan tidak boleh kosong";
		} else {
			$hasilayah = cek_input($_POST["hasilayah"]);
			}

	if (empty($_POST["kebkhususayah"])) {
			$error_kebkhususayah = "Pilihan tidak boleh kosong";
		} else {
			$kebkhususayah = cek_input($_POST["kebkhususayah"]);
			}

		if (empty($_POST["namaa=namaibu"])) {
			$error_namaibu = "Nama ibu tidak boleh kosong";
		} else {
			$namaibu = cek_input($_POST["namaibu"]);
			if (!preg_match("/^[a-zA-Z ]*$/", $namaibu)) {
				$namaibuErr = "Inputan hanya boleh huruf dan spasi";
			}
		}

	if (empty($_POST["lahiribu"])) {
			$error_lahiribu = "Tahun lahir ibu tidak boleh kosong";
		} else {
			$lahiribu = cek_input($_POST["lahiribu"]);
			if (!is_numeric($nokps)) {
				$error_lahiribu = 'Tahun kelahiran hanya boleh angka';
			}
		}

	if (empty($_POST["error_pendidikanibu"])) {
			$error_pendidikanibu = "Pilihan tidak boleh kosong";
		} else {
			$pendidikanibu = cek_input($_POST["pendidikanibu"]);
			}

	if (empty($_POST["kerjaibu"])) {
			$error_kerjaibu = "Pilihan tidak boleh kosong";
		} else {
			$kerjaibu = cek_input($_POST["kerjaibu"]);
			}

	if (empty($_POST["hasilibu"])) {
			$error_hasilibu = "Pilihan tidak boleh kosong";
		} else {
			$hasilibu = cek_input($_POST["hasilibu"]);
			}

	if (empty($_POST["kebkhususibu"])) {
			$error_kebkhususibu = "Pilihan tidak boleh kosong";
		} else {
			$kebkhususibu = cek_input($_POST["kebkhususibu"]);
			}

	$tanggal = ($_POST['tanggal']);
	$jenisdaftar = ($_POST['jenisdaftar']);
	$tglmasuk = ($_POST['tglmasuk']);
	$nis = ($_POST['nis']);
	$nopes = ($_POST['nopes']);
	$paud = ($_POST['paud']);
	$tk = ($_POST['tk']);
	$skhun = ($_POST['skhun']);
	$ijazah = ($_POST['ijazah']);
	$hobi = ($_POST['hobi']);
	$citacita = ($_POST['citacita']);

	$nama = ($_POST['nama']);
	$gender = ($_POST['gender']);
	$nisn = ($_POST['nisn']);
	$nik = ($_POST['nik']);
	$tmplahir = ($_POST['tmplahir']);
	$tgllahir = ($_POST['tgllahir']);
	$agama = ($_POST['agama']);
	$kebkhusus = ($_POST['kebkhusus']);
	$alamat = ($_POST['alamat']);
	$rt = ($_POST['rt']);
	$rw = ($_POST['rw']);
	$dusun = ($_POST['dusun']);
	$kel = ($_POST['kel']);
	$kec = ($_POST['kec']);
	$pos = ($_POST['pos']);
	$tmptinggal = ($_POST['tmptinggal']);
	$transport = ($_POST['transport']);
	$hp = ($_POST['hp']);
	$telp = ($_POST['telp']);
	$email = ($_POST['email']);
	$kps = ($_POST['kps']);
	$nokps = ($_POST['nokps']);
	$kwn = ($_POST['kwn']);
	$negara = ($_POST['negara']);

	$namaayah = ($_POST['namaayah']);
	$lahirayah = ($_POST['lahirayah']);
	$pendidikanayah = ($_POST['pendidikanayah']);
	$kerjaayah = ($_POST['kerjaayah']);
	$hasilayah = ($_POST['hasilayah']);
	$kebkhususayah = ($_POST['kebkhususayah']);

	$namaibu = ($_POST['namaibu']);
	$lahiribu = ($_POST['lahiribu']);
	$pendidikanibu = ($_POST['pendidikanibu']);
	$kerjaibu = ($_POST['kerjaibu']);
	$hasilibu = ($_POST['hasilibu']);
	$kebkhususibu = ($_POST['kebkhususibu']);

	$sql = "INSERT INTO daftar(tanggal, jenisdaftar, tglmasuk, nis, nopes, paud, tk, skhun, ijazah, hobi, citacita, nama, gender, nisn, nik, tmplahir, tgllahir, agama, kebkhusus,alamat, rt, rw, dusun, kel, kec, pos, tmptinggal, transport, hp, telp, email, kps, nokps, kwn, negara, namaayah, lahirayah, pendidikanayah, kerjaayah, hasilayah, kebkhususayah, namaibu, lahiribu, pendidikanibu, kerjaibu, hasilibu, kebkhususibu) VALUES ('$tanggal', '$jenisdaftar', '$tglmasuk', '$nis', '$nopes', '$paud', '$tk', '$skhun', '$ijazah', '$hobi', '$citacita', '$nama', '$gender', '$nisn', '$nik', '$tmplahir', '$tgllahir', '$agama', '$kebkhusus', '$alamat', '$rt', '$rw', '$dusun', '$kel', '$kec', '$pos', '$tmptinggal', '$transport', '$hp', '$telp', '$email', '$kps', '$nokps', '$kwn', '$negara', '$namaayah', '$lahirayah', '$pendidikanayah', '$kerjaayah', '$hasilayah', '$kebkhususayah', '$namaibu', '$lahiribu', '$pendidikanibu', '$kerjaibu', '$hasilibu', '$kebkhususibu')";
	$hasil = mysqli_query($conn, $sql);
}
?>
</body>
</html>
