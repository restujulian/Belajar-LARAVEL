<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
<div class="container">
	<h1>Masukan Nilai Segi Empat</h1>

	<!-- tampilkan pesan jika terjadi kesalahan -->

	@if (count( $errors ) > 0)
		<div class="alert alert-danger">
	 		<strong>Terdapat beberapa kesalahan harus diperbaiki:</strong><br>
	 		{!! Html::ul($errors->all()) !!}
		</div>
	@endif

	{!! Form::open(array('url' => 'segi-empat/hasil')) !!}

		<div class="form-group">
			{!! Form::label('panjang', 'Panjang') !!}
			{!! Form::number('panjang',null,
			array('class' => 'form-control')) !!}
		</div>
		<div class="form-group">
			{!! Form::label('lebar', 'Lebar') !!}
			{!! Form::number('lebar',null,
			array('class' => 'form-control')) !!}
		</div>

	<a class="btn btn-success" href="http://localhost:8000/segi-empat/inputKubus">Hitung Kubus</a>
	{!! Form::submit('Proses >>',
	array('class' => 'btn btn-primary')) !!}
	{!! Form::close() !!}
</div>