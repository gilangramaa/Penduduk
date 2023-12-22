<?php
	include "../inc/koneksi.php";
	
	if (isset ($_POST['Cetak'])){
	$id = $_POST['id_pend'];
	}

	$tanggal = date("m/y");
	$tgl = date("d/m/y");
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>CETAK SURAT</title>
</head>

<body>
	<center>

		<h2>PEMERINTAH KABUPATEN LANGKAT</h2>
		<h3>KECAMATAN HINAI 
			<br>DESA SUKADAMAI TIMUR</h3>
		<p>________________________________________________________________________</p>

		<?php
			$sql_tampil = "select * from tb_pdd
			where status='Pindah' and id_pend ='$id'";
			
			$query_tampil = mysqli_query($koneksi, $sql_tampil);
			$no=1;
			while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
		?>
	</center>

	<center>
		<h4>
			<u>SURAT KETERANGAN PINDAH</u>
		</h4>
		<h4>No Surat :
			<?php echo $data['id_pend']; ?>/Ket.Pindah/
			<?php echo $tanggal; ?>
		</h4>
	</center>
	<p>Yang bertandatangan dibawah ini Kepala Desa SukaDamai Timur, Kecamatan Hinai, Kabupaten Langkat, dengan ini menerangkan
		bahwa :</P>
	<table>
		<tbody>
			<tr>
				<td>NIK</td>
				<td>:</td>
				<td>
					<?php echo $data['nik']; ?>
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>
					<?php echo $data['nama']; ?>
				</td>
			</tr>
			<tr>
				<td>TTL</td>
				<td>:</td>
				<td>
					<?php echo $data['tempat_lh']; ?>/
					<?php echo $data['tgl_lh']; ?>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	<p>Telah benar-benar Pindah dari Desa SukaDamai Timur, Kecamatan Kasihan Kabuputen Langkat.</P>
	<p>Demikian Surat ini dibuat, agar dapat digunakan sebagai mana mestinya.</P>
	<br>
	<br>
	<br>
	<br>
	<br>
	<p align="right">
		Langkat,
		<?php echo $tgl; ?>
		<br> KEPALA DESA SUKADAMAI TIMUR
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>(         GILANG RAMADHAN           )
	</p>


	<script>
		window.print();
	</script>

</body>

</html>