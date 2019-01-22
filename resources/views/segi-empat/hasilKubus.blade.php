<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">

<div class="container">
	<h1>Hasil Menghitung Volume Kubus</h1>

	<table class="table table-striped table-bordered">
		<thead style="background-color: lightblue;">
			<th>Keterangan</th>
			<th>Nilai</th>
		</thead>
		<tbody>
			<tr>
				<td>Panjang </td><td>{{$kubus->panjang}}</td>
			</tr>
			<tr>
				<td>Lebar </td><td>{{$kubus->lebar}}</td>
			</tr>
			<tr>
				<td>Tebal </td><td>{{$kubus->tebal}}</td>
			</tr>
			<tr>
				<td>Volume </td><td>{{$kubus->volume()}}</td>
			</tr>
		</tbody>
	</table>
	<a class="btn btn-primary" href="http://localhost:8000/segi-empat/inputSegiEmpat">Back to HOME</a>
</div>