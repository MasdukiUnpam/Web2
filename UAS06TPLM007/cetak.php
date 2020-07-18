<html>
<head>
	<title>MASDUKI 06TPLM007</title>
</head>
<body>
 
	<center>
 
		<h2>DATA PEMBAYARAN ZAKAT</h2>
	<?php echo "Per ". date('d M Y H:i:s')."<br>";
	 	  echo "</center>"; 
	?>
	<?php 
	include 'koneksi.php';
	?>
 
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
			<th width="5%">Jenis Zakat</th>
			<th width="5%">Nominal(Rp.)</th>
			<th width="5%">Nama</th>
			<th width="5%">No. Telp</th>
			<th width="5%">Email</th>
			<th width="5%">Bank</th>
			<th width="5%">No Rekening</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from zakat");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['jenis_zakat']; ?></td>
			<td><?php echo $data['nominal']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['no_tlp']; ?></td>
			<td><?php echo $data['email']; ?></td>
			<td><?php echo $data['bank']; ?></td>
			<td><?php echo $data['no_rek']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
 <div style="margin: 0 0 50px 75%;">	
    </div>

    <center>-------------------- Terima Kasih ------------------- </center>

    </div>
	<script>
		window.print();
	</script>

</body>
</html>