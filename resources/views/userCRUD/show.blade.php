@extends('layouts.default')

@section('content')

	<div class="row">
		<div class="col-lg-12 margin-tb">
			<div class="pull-left">
				<h2> Show User</h2>
			</div>
			<div class="pull-right">
				<a class="btn btn-primary" href="{{ route('User.index') }}"> Back </a>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12 cos-sm-12 col-md-12">
			<div class="form-group">
				<strong> User ID : </strong>
				{{ $users->id_user }}<br>
                <strong> Nama : </strong>
				{{ $users->nama }}<br>
                <strong> Alamat : </strong>
				{{ $users->alamat }}<br>
                <strong> No HP : </strong>
				{{ $users->no_hp }}<br>
                <strong> Asal Sekolah : </strong>
				{{ $users->asal_sekolah }}<br>
                <strong> Email : </strong>
				{{ $users->email }}<br>
                <strong> Username : </strong>
				{{ $users->username }}<br>
				
			</div>
		</div>
	</div>

	@endsection