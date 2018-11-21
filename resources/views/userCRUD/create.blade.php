@extends('layouts.default')

@section('content')

<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Create New User</h2>
		</div>
		<div class="pull-right">
			<a class="btn btn-primary" href="{{ route('User.index') }}">Back</a>
		</div>
	</div>
</div>
@if(count($errors) > 0)
<div class="alert alert-danger">
	<strong>Whoops!</strong> There were some problems with your input. <br><br>
	<ul>
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif

{!! Form::open(array('route' => 'User.store','method'=>'POST')) !!}
<div class="row">
	<div class="form-group">
		<strong> Nama :</strong>
		{!! Form::text('nama',null,array('placeholder' => 'Masukan nama','class' => 'form-control')) !!}
		<strong> Alamat :</strong>
		{!! Form::text('alamat',null,array('placeholder' => 'Masukan alamat','class' => 'form-control')) !!}
		<strong> No HP :</strong>
		{!! Form::text('no_hp',null,array('placeholder' => 'Masukan no hp','class' => 'form-control')) !!}
		<strong> Asal Sekolah :</strong>
		{!! Form::text('asal_sekolah',null,array('placeholder' => 'Masukan asal sekolah','class' => 'form-control')) !!}
		<strong> Email :</strong>
		{!! Form::text('email',null,array('placeholder' => 'Masukan email','class' => 'form-control')) !!}
        <strong> Username :</strong>
		{!! Form::text('username',null,array('placeholder' => 'Masukan username','class' => 'form-control')) !!}
		<strong> Password :</strong> <br>
		{!! Form::password('password',null,array('placeholder' => 'Masukan password','class' => 'form-control')) !!}
       <br>
	   <strong> Confirm your password :</strong>  <br>
		{!! Form::password('cnf_psw',null,array('placeholder' => 'konfirmasi pasword anda','class' => 'form-control')) !!}
		<div class="col-xs-12 col-sm-12 col-md-12 text-center">
			<button type="submit" class="btn btn-primary">Add</button>
		</div>
	</div>
</div>
{!! Form::close() !!}

@endsection