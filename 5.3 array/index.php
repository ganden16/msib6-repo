<?php

$data = [
	[
		'nama' => 'Andi Santono',
		'nim' => '00011',
		'nilai' => 95,
	],
	[
		'nama' => 'Budi Kurniawan',
		'nim' => '00012',
		'nilai' => 80,
	],
	[
		'nama' => 'Candi Badur',
		'nim' => '00013',
		'nilai' => 78,
	],
	[
		'nama' => 'Denis Saputra',
		'nim' => '00014',
		'nilai' => 76,
	],
	[
		'nama' => 'Erik Manahel',
		'nim' => '00015',
		'nilai' => 86,
	],
	[
		'nama' => 'Fatril Nusontro',
		'nim' => '00016',
		'nilai' => 50,
	],
	[
		'nama' => 'Gayama Hayustia',
		'nim' => '00017',
		'nilai' => 20,
	],
	[
		'nama' => 'Isma Lotono',
		'nim' => '00018',
		'nilai' => 30,
	],
	[
		'nama' => 'Jami Sayir',
		'nim' => '00019',
		'nilai' => 70,
	],
	[
		'nama' => 'Karni Buato',
		'nim' => '00020',
		'nilai' => 65,
	],
];

$judulTabel = ['No', 'Nama', 'NIM', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Array</title>
</head>


<body>
	<h1 align="center">Tabel Daftar Nilai</h1>
	<div align="center">
		<table border="true">
			<thead>
				<tr style="background: #8f66668d">
					<?php foreach ($judulTabel as $judul) { ?>
						<th align="center""><?= $judul ?></th>
					<?php } ?>
				</tr>
			</thead>
			<tbody>
			<?php
			$no = 1;
			$maxNilai = 0;
			$minNilai = 100;
			$jumlahNilai = 0;
			$jumlahMahasiswa = count($data);
			?>
			<?php foreach ($data as $mahasiswa) { ?>
				<?php
				$keterangan = $mahasiswa['nilai'] >= 65 ? 'Lulus' : 'Tidak Lulus';
				$grade = '';
				$predikat = '';

				if ($mahasiswa['nilai'] > 85) $grade = 'A';
				else if ($mahasiswa['nilai'] > 70) $grade = 'B';
				else if ($mahasiswa['nilai'] > 50) $grade = 'C';
				else if ($mahasiswa['nilai'] >= 30) $grade = 'D';
				else $grade = 'E';

				if ($grade == 'A') $predikat = 'Memuaskan';
				else if ($grade == 'B') $predikat = 'Bagus';
				else if ($grade == 'C') $predikat = 'Cukup';
				else if ($grade == 'D') $predikat = 'Kurang';
				else $predikat = 'Buruk';

				if ($mahasiswa['nilai'] > $maxNilai) {
					$maxNilai = $mahasiswa['nilai'];
				}
				if ($mahasiswa['nilai'] < $minNilai) {
					$minNilai = $mahasiswa['nilai'];
				}

				$jumlahNilai += $mahasiswa['nilai'];
				?>
				<tr>
						<th align=" center"><?= $no; ?></th>
						<th align=" center"><?= $mahasiswa['nama']; ?></th>
						<th align=" center"><?= $mahasiswa['nim']; ?></th>
						<th align=" center"><?= $mahasiswa['nilai']; ?></th>
						<th align=" center"><?= $keterangan; ?></th>
						<th align=" center"><?= $grade; ?></th>
						<th align=" center"><?= $predikat; ?></th>
				</tr>
				<?php $no++; ?>
			<?php } ?>
			</tbody>
			<tfoot>
				<tr style="background: #8f66668d">
					<th colspan="5" align="center">NILAI TERTINGGI</th>
					<th colspan="2" align="center"><?= $maxNilai; ?></th>
				</tr>
				<tr style="background: #8f66668d">
					<th colspan="5" align="center">NILAI TERENDAH</th>
					<th colspan="2" align="center"><?= $minNilai; ?></th>
				</tr>
				<tr style="background: #8f66668d">
					<th colspan="5" align="center">NILAI RATA-RATA</th>
					<th colspan="2" align="center"><?= $jumlahNilai / $jumlahMahasiswa; ?></th>
				</tr>
				<tr style="background: #8f66668d">
					<th colspan="5" align="center">JUMLAH MAHASISWA</th>
					<th colspan="2" align="center"><?= $jumlahMahasiswa; ?></th>
				</tr>
				<tr style="background: #8f66668d">
					<th colspan="5" align="center">JUMLAH KESELURUHAN NILAI</th>
					<th colspan="2" align="center"><?= $jumlahNilai; ?></th>
				</tr>
			</tfoot>
		</table>
	</div>
</body>

</html>