@extends('layouts.default')

@section('content')

	<div class="row">
		<div class="col-lg-12 margin-tb">
			<div class="pull-left">
				<h2>Edit Jadwal</h2>
			</div>
			<div class="pull-right">
				<a class="btn btn-primary" href="{{ route('Jadwal.index') }}"> Back </a>
			</div>
		</div>	
	</div>

	@if(count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Whoops!</strong> There were some problems with your input. <br><br>
			<ul>
				@foreach($errors->all() as $error)
					<li> {{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	{!! Form::model($jadwals,['method' => 'PATCH','route' => ['Jadwal.update',$jadwals->id_jadwal]]) !!}
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong> Nama Mapel : </strong>
				{!! Form::text('nama_mapel',null, array('placeholder' => 'Masukan nama mapel les','class' => 'form-control')) !!}
				<strong> Hari : </strong>
				{!! Form::text('hari',null, array('placeholder' => 'Masukan hari les','class' => 'form-control')) !!}
				<strong> Jam : </strong>
				{!! Form::text('jam',null, array('placeholder' => 'Masukan jam les','class' => 'form-control')) !!}
			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12 text-center">
			<button type="submit" class="btn btn-primary">Update</button>
		</div>
	</div>
	{!! Form::close() !!}

@endsection