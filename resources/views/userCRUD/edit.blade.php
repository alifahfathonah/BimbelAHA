@extends('layouts.default')

@section('content')

	<div class="row">
		<div class="col-lg-12 margin-tb">
			<div class="pull-left">
				<h2>Edit User</h2>
			</div>
			<div class="pull-right">
				<a class="btn btn-primary" href="{{ route('User.index') }}"> Back </a>
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

	{!! Form::model($users,['method' => 'PATCH','route' => ['User.update',$users->id_user]]) !!}
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong> Nama : </strong>
				{!! Form::text('nama',null, array('placeholder' => 'Masukan nama','class' => 'form-control')) !!}
                <strong> Alamat : </strong>
				{!! Form::text('alamat',null, array('placeholder' => 'Masukan alamat','class' => 'form-control')) !!}
                <strong> No HP : </strong>
				{!! Form::text('no_hp',null, array('placeholder' => 'Masukan no hp','class' => 'form-control')) !!}
                <strong> Username : </strong>
				{!! Form::text('username',null, array('placeholder' => 'Masukan username','class' => 'form-control')) !!}
                <strong> Password : </strong> <br>
				{!! Form::password('password',null, array('placeholder' => 'Masukan password','class' => 'form-control')) !!}
               <br>
                <strong> Confirm Password : </strong> <br>
				{!! Form::password('cnf_psw',null, array('placeholder' => 'Konfirmasi password','class' => 'form-control')) !!}
		
			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12 text-center">
			<button type="submit" class="btn btn-primary">Update</button>
		</div>
	</div>
	{!! Form::close() !!}

@endsection