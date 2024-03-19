function simpan() {
	const nama = document.getElementById('inputNama').value.toLowerCase();
	const status = document.getElementById('inputStatus').value.toLowerCase();
	const jabatan = document.getElementById('inputJabatan').value.toLowerCase();
	console.log(nama, status, jabatan)

	let gajiPokok = 0;
	if(jabatan == 'manager') gajiPokok = 15000000;
	if(jabatan == 'asisten manager') gajiPokok = 10000000;
	if(jabatan == 'staff') gajiPokok = 5000000;
	const tunjanganJabatan = (15 * gajiPokok) / 100;
	const bpjs = (10 * gajiPokok) / 100;
	const tunjanganKeluarga = status == 'menikah' ? (20 * gajiPokok) / 100 : 0;
	const totalGaji = gajiPokok + tunjanganJabatan + bpjs + tunjanganKeluarga;

	Swal.fire({
		width: 950,
		html: `
		<table border="true">
				<thead>
					<tr style="background: #8f66668d">
						<th>NAMA</th>
						<th>JABATAN</th>
						<th>STATUS</th>
						<th>GAJI POKOK</th>
						<th>TUNJANGAN JABATAN</th>
						<th>BPJS</th>
						<th>TUNJANGAN KELUARGA</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td id="nama">${nama}</td>
						<td id="jabatan">${jabatan}</td>
						<td id="status">${status}</td>
						<td id="gajiPokok">Rp${gajiPokok}</td>
						<td id="tunjanganJabatan">Rp${tunjanganJabatan}</td>
						<td id="bpjs">Rp${bpjs}</td>
						<td id="tunjanganKeluarga">Rp${tunjanganKeluarga}</td>
					</tr>
				</tbody>
				<tfoot>
					<tr style="background: #8f66668d">
						<th colspan="6" align="center">TOTAL GAJI</th>
						<th colspan="1" align="center" id="totalGaji">Rp${totalGaji}</th>
					</tr>
				</tfoot>
			</table>
		`
	});
}
