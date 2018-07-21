@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Data Perusahaan
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('perusahaan.store') }}" method="post" encytype="multipart/form-data">
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama_pers') ? ' has-error' : '' }}">
			  			<label class="control-label">NAMA PERUSAHAAN</label>	
			  			<input type="text" name="nama_pers" class="form-control"  required>
			  			@if ($errors->has('nama_pers'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_pers') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('logo') ? ' has-error' : '' }}">
			  			<label class="control-label">LOGO</label>	
			  			<input type="file" name="logo" value="image/*" class="form-control"  required>
			  			@if ($errors->has('logo'))
                            <span class="help-block">
                                <strong>{{ $errors->first('logo') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
			  			<label class="control-label">DESKRIPSI</label>	
			  			<textarea name="deskripsi" class="ckeditor" required></textarea>
			  			@if ($errors->has('deskripsi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('deskripsi') }}</strong>
                            </span>
                        @endif
			  		</div>

                   <div class="form-group {{ $errors->has('telepon') ? ' has-error' : '' }}">
			  			<label class="control-label">TELEPON</label>	
			  			<input type="number" name="telepon" class="form-control"  required>
			  			@if ($errors->has('telepon'))
                            <span class="help-block">
                                <strong>{{ $errors->first('telepon') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
			  		
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection