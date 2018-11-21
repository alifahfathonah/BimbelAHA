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
				<strong> Jadwal : </strong>
				{!! Form::text('nama_mapel',null, array('placeholder' => 'Fill with name of the subject','class' => 'form-control')) !!}
			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12 text-center">
			<button type="submit" class="btn btn-primary">Update</button>
		</div>
	</div>
	{!! Form::close() !!}

@endsection