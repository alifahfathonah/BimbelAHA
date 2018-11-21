@extends ('layouts.default')

@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Jadwal CRUD</h2>
		</div>
		<div class="pull-right">
			<a class="btn btn-success" href="{{ route('Jadwal.create') }}">Create New Schedule</a>
		</div>
	</div>
</div>

@if ($message = Session::get('success'))
	<div class="alert alert-success">
		<p>{{ $message }}</p>
	</div>
@endif

<table class="table table-bordered">
	<tr>
		<th>No</th>
		<th>Mata Pelajaran</th>
        <th>Hari</th>
        <th>Waktu</th>
		<th width="280px">Action</th>
	</tr>
@if(count($jadwals))
@foreach($jadwals as $jadwal)
<tr>
	<td>{{ $jadwal->id_jadwal }}</td>
	<td>{{ $jadwal->nama_mapel }}</td>
    <td>{{ $jadwal->hari }}</td>
    <td>{{ $jadwal->jam }}</td>
	<td>
		<a class="btn btn-info" href="{{ route('Jadwal.show',$jadwal->id) }}">Show</a>
		<a class="btn btn-primary" href="{{ route('Jadwal.edit',$jadwal->id )}}">Edit</a>
		{!! Form::open(['method' => 'Delete', 'route'
						=>['Jadwal.destroy',$jadwal->id],'style'=>'display:inline']) !!}
		{!! Form::submit('Delete',['class' => 'btn btn-danger']) !!}
		{!! Form::close() !!}
	</td>
</tr>
@endforeach
@else
<tr>
	<td align="center" colspan="5">Empty Data!! Have a nice day :)</td>
</tr>
@endif
</table>
@endsection