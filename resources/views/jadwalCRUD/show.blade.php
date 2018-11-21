@extends('layouts.default')

@section('content')

	<div class="row">
		<div class="col-lg-12 margin-tb">
			<div class="pull-left">
				<h2> Show Jadwal</h2>
			</div>
			<div class="pull-right">
				<a class="btn btn-primary" href="{{ route('Jadwal.index') }}"> Back </a>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12 cos-sm-12 col-md-12">
			<div class="form-group">
				<strong> Jadwal ID : </strong>
				{{ $jadwals->id_jadwal }}<br>
				<strong> Nama Mapel : </strong>
				{{  $jadwals->nama_mapel }}<br>
				<strong> Hari : </strong>
				{{  $jadwals->hari }}<br>
				<strong> Jam : </strong>
				{{  $jadwals->jam }}<br>
			</div>
		</div>
	</div>

	@endsection