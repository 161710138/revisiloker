@extends('layouts.frontend')
@section('content')
   <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>{{$lowongan->nama_low}}</h2>
        <ol class="breadcrumb">
            <li><a href="index.html">{{  $lowongan->Perusahaan->nama_pers }}</a></li>
            <li><a href="#" class="active">{{  $lowongan->lokasi }}</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

    <!-- blog area -->
    <section class="blog_all">
        <div class="container">
            <div class="row m0 blog_row">
                <div class="col-sm-8 main_blog">
                    <img src="images/blog/blog_hed-1.jpg" alt="">
                    <div class="col-xs-1 p0">
                       <div class="blog_date">
                           <a href="#">{{$lowongan->tgl_mulai}}</a>
                       </div>
                    </div>
                    <div class="col-xs-11 blog_content">
                        <a class="blog_heading" href="#">{{$lowongan->nama_low}}</a>
                        <a class="blog_admin" href="#"><i class="fa fa-user" aria-hidden="true">{{  $lowongan->Perusahaan->nama_pers }}</i></a>
                        <a class="blog_admin" href="#"><i class="fa fa-money" aria-hidden="true">{{  $lowongan->gaji }}</i></a>
                       
                        <p>{!! $lowongan->deskripsi_iklan !!}<p>
                        <div class="tag">
                            <a href="" data-toggle="modal" data-target="#lamar">LAMAR SEKARANG</a>
                        </div>
                    </div>
                    

                   
                   
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="lamar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <br>
      <br>
      <br>
      <br>
      <br>
        <h5 class="modal-title" id="exampleModalLabel">Lamar Disini</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('pelamar.store') }}" method="post" >
                    {{ csrf_field() }}
                    <input type="hidden" name="low_id" value="{{$lowongan->id}}">
                    <div class="form-group {{ $errors->has('telepon') ? ' has-error' : '' }}">
                        <label class="control-label">TELEPON</label>    
                        <input type="text" name="telepon" class="form-control"  required>
                        @if ($errors->has('telepon'))
                            <span class="help-block">
                                <strong>{{ $errors->first('telepon') }}</strong>
                            </span>
                        @endif
                    </div>
                        <div class="form-group {{ $errors->has('pesan') ? ' has-error' : '' }}">
                        <label class="control-label">PESAN</label>  
                        <input type="text" name="pesan" class="ckeditor" rows="10" required>
                        @if ($errors->has('pesan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pesan') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('file_cv') ? ' has-error' : '' }}">
                        <label class="control-label">CV</label> 
                        <input type="file" name="file_cv" class="form-control"  required>
                        @if ($errors->has('file_cv'))
                            <span class="help-block">
                                <strong>{{ $errors->first('file_cv') }}</strong>
                            </span>
                        @endif
                    </div>

                       
                    
                    <div class="form-group">

                    </div>
                
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Kirim Lamaran</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
