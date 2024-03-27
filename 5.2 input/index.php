<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Input</title>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	</head>
	<body>
		<center>
			<form action="" method="POST">
				<div>
					<label for="inputNama">Nama Pelanggan</label>
					<input type="text" id="inputNama" name="inputNama" style="width: 20%" />
				</div>
				<br />
				<div>
					<label for="inputProduk">Produk Pilihan</label>
					<select name="inputProduk" id="inputProduk" style="width: 20%">
						<option value="">-- Pilih Produk --</option>
						<option value="tv">TV</option>
						<option value="kulkas">Kulkas</option>
						<option value="mesin cuci">Mesin Cuci</option>
						<option value="ac">Ac</option>
					</select>
				</div>
				<br />
				<div>
					<label for="inputJumlah">Jumlah Beli</label>
					<input type="number" name="inputJumlah" id="inputJumlah" style="width: 20%"/>
				</div>
				<br />
				<button type="submit">simpan</button>
			</form>
		</center>
		<br />
		<br />
	<?php 
	$totalBelanja = 0;
	if($_POST['inputNama'] != '' && $_POST['inputJumlah'] != '' && $_POST['inputProduk'] != '' ){ 
		$nama = $_POST['inputNama'];
		$produk = $_POST['inputProduk'];
		$jumlah = $_POST['inputJumlah'];
		$hargaSatuan = 0;
		if($produk == 'tv') $hargaSatuan = 4200000;
		if($produk == 'kulkas') $hargaSatuan = 2500000;
		if($produk == 'mesin cuci') $hargaSatuan = 3800000;
		if($produk == 'ac') $hargaSatuan = 3000000;
		$totalBelanja = $hargaSatuan * $jumlah;
		$diskon = 20 / 100 * $totalBelanja ;
		$ppn = 10 / 100 *($totalBelanja - $diskon);
		$hargaBersih = $totalBelanja - $diskon + $ppn;
	}
	?>
	<?php if($totalBelanja > 0){?>
				<script>	
				Swal.fire({
					width: 1200,
					html: `
					<center>
						<table border='true'>
						<thead>
							<tr style='background: #8f66668d'>
								<th>NAMA PELANGGAN</th>
								<th>PRODUK PILIHAN</th>
								<th>JUMLAH BELI</th>
								<th>HARGA SATUAN</th>
								<th>TOTAL BELANJA</th>
								<th>POTONGAN DISKON</th>
								<th>PPN</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td align='center'><?= $nama; ?></td>
								<td align='center'><?= $produk; ?></td>
								<td align='center'><?= $jumlah; ?></td>
								<td align='center'>Rp.<?= $hargaSatuan; ?></td>
								<td align='center'>Rp.<?= $totalBelanja; ?></td>
								<td align='center'>Rp.<?= $diskon; ?></td></td>
								<td align='center'>Rp.<?= $ppn; ?></td></td>
							</tr>
						</tbody>
						<tfoot>
							<tr style='background: #8f66668d'>
								<th colspan='6' align='center'>HARGA BERSIH</th>
								<th colspan='1' align='center'>Rp.<?= $hargaBersih; ?></th>
							</tr>
						</tfoot>
					</table>
				</center>
					`
				});
			</script>
	<?php } ?>
	
	</body>
</html>

