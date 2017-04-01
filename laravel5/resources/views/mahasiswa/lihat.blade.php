@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('mahasiswa')}}">
			<i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail mahasiswa
		</strong>
	</div>
	<table class="table">
		<tr>
			<td>Username</td>
			<td>:</td>
			<td>{{ $mahasiswa->username }}</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td>{{ $mahasiswa->password }}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat Tanggal</td>
			<td class="col-xs-4">:</td>
			<td class="col-xs-4">{{$mahasiswa->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diperbarui Tanggal</td>
			<td class="col-xs-4">:</td>
			<td class="col-xs-4">{{$mahasiswa->update_at}}</td>
		</tr>
		
	</table>
</div>
@stop