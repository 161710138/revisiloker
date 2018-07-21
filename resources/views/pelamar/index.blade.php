@extends('layouts.admin')
@section('content')

	<div class="row">
	<div class="container">
	<div class="col-md-16">
			 <div class="panel panel-success">
			  <div class="panel-heading"><font color ="blue">Data Pelamar </font>
			  	
				 </div>
			
			  
			 <div class="row">
     			<div class="col-md-12">
                 <!-- DATA TABLE-->
                   <div class="table-responsive m-b-40">
					<table class="table table-data2">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
			  		  <th>Telepon</th>
					  <th>Pesan</th>
					  <th>FileCV</th>
					  <th>Username</th>
					  <th>Lowongan</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($pel as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->telepon }}</td>
				    	<td>{{ $data->pesan }}</td>
				    	<td><embed src="{{ asset('assets/cv/'.$data->file_cv) }}" type="application/pdf" width="80%" height="150px" /></td>
				    	<td><p>{{ $data->User->email }}</p></td>
				    	<td><p>{{ $data->Lowongan->nama_low }}</p></td>
<td>
	<a class="btn btn-success" href="{{ route('pelamar.edit',$data->id) }}"><i class="fas fa-edit"></i>Terima</a>
</td>
<td>
	<form method="post" action="{{ route('pelamar.destroy',$data->id) }}">
		<input name="_token" type="hidden" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="Tolak">

		<button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"><i class="fas fa-eraser"></i>Delete</button>
	</form>
</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection