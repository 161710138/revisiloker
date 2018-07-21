@extends('layouts.frontend')
@section('content')
    @if($lowongan->count() == 0)
    <i class="fa fa-search"></i>Pencarian tidak ditemukan
    @endif
      @foreach($lowongan as $data)
                <div class="col-md-4 col-sm-6 blog_content">
                    <a href="#" class="blog_heading">{{ $data->nama_low}}</a>
                    <h4><small>Perusahaan  </small><a href="#">{{  $data->Perusahaan->nama_pers }}</a><span>/</span><small>Masa lowongan 2 bulan setelah terbit terhitung dari tanggal : </small> ">{{ $data->tgl_mulai }}</h4>
                    {!! str_limit($data->deskripsi_iklan, 200) !!} &nbsp&nbsp <a href="{{ url('rincilow',$data->id) }}">Selengkapnya</a>
                </div>
            @endforeach
            @endsection
    