<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}

		table{
			width:100%;
		}
	</style>
	<center>
		<h3>Laporan Pembayaran SPP</h2>
		
	</center>
 
	<table class='table table-bordered' border="1">
		<thead>
			<tr>
                <th>No</th>
                <th>Nama</th>
                <th>NISN</th>
                <th>NIS</th>
                <th>Kelas</th>
                <th>Petugas</th>
                <th>Tahun Bayar</th>
                <th>Bulan Bayar</th>
                <th>Jumlah Bayar</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($data as $key => $p)
			<tr>
                <td>{{ $key +1 }}</td>
                <td>{{ $p->siswa->name }}</td>
                <td>{{ $p->siswa->nisn }}</td>
                <td>{{ $p->siswa->nis }}</td>
                <td>{{ $p->siswa->kelas->kelas }}</td>
                <td>{{ $p->petugas->name }}</td>
                <td>{{ $p->tahun_bayar  }}</td>
                <td>{{ $p->bulan_bayar }}</td>
                <td>Rp. {{ number_format($p->jumlah_bayar) }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>