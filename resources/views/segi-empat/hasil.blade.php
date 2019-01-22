<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
<div class="container">
	<h1>Hasil Perhitungan Segi Empat</h1>

	<table class="table table-striped table-bordered">
		<thead style="background-color: lightblue;">
			<th>Keterangan</th>
			<th>Nilai</th>
		</thead>
		<tbody>
			<tr>
				<td>Panjang </td><td>{{$SegiEmpat->panjang}}</td>
			</tr>
			<tr>
				<td>Lebar </td><td>{{$SegiEmpat->lebar}}</td>
			</tr>
			<tr>
				<td>Luas </td><td>{{$SegiEmpat->luas()}}</td>
			</tr>
			<tr>
				<td>Keliling </td><td>{{$SegiEmpat->keliling()}}</td>
			</tr>
		</tbody>
	</table>
	<a class="btn btn-primary" href="http://localhost:8000/segi-empat/inputSegiEmpat">Back to HOME</a>
</div>