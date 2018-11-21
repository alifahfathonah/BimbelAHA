@extends ('layouts.default')

@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>User CRUD</h2>
		</div>
		<div class="pull-right">
			<a class="btn btn-success" href="{{ route('User.create') }}">Create New User</a>
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
		<th>ID Siswa</th>
		<th>Nama</th>
        <th>Alamat</th>
        <th>No HP</th>
        <th>Asal Sekolah</th>
		<th>Email</th>
        <th>Username</th>
		<th width="280px">Action</th>
	</tr>
@if(count($users))
@foreach($users as $user)
<tr>
	<td>{{ $user->id_user }}</td>
	<td>{{ $user->nama }}</td>
	<td>{{ $user->alamat }}</td>
    <td>{{ $user->no_hp }}</td>
	<td>{{ $user->asal_sekolah }}</td>
    <td>{{ $user->email }}</td>
	<td>{{ $user->username }}</td>
	<td>
		<a class="btn btn-info" href="{{ route('User.show',$user->id_user) }}">Show</a>
		<a class="btn btn-primary" href="{{ route('User.edit',$user->id_user )}}">Edit</a>
		{!! Form::open(['method' => 'Delete', 'route'
						=>['User.destroy',$user->id_user],'style'=>'display:inline']) !!}
		{!! Form::submit('Delete',['class' => 'btn btn-danger']) !!}
		{!! Form::close() !!}
	</td>
</tr>
@endforeach
@else
<tr>
	<td align="center" colspan="8">Empty Data!! Have a nice day :)</td>
</tr>
@endif
</table>
@endsection