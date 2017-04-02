@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data mahasiswa</strong>
		<a href="{{url('mahasiswa/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i> mahasiswa</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>nama</th>
				<th>Nim</th>
				<th>Alamat</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($data as $mahasiswa)
			<tr>
				<td>{{ $x++}}</td>
				<td>{{ $mahasiswa->nama_mahasiswa or 'nama kosong' }}</td>
				<td>{{ $mahasiswa->nim or 'nim kosong' }}</td>
				<td>{{ $mahasiswa->alamat_mhs or 'alamat kosong' }}</td>
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('mahasiswa/edit/'.$mahasiswa->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('mahasiswa/lihat/'.$mahasiswa->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('mahasiswa/hapus/'.$mahasiswa->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop