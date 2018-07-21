@extends('layouts.frontend')
@section('content')
   <!-- About Us Area -->
    <section class="about_us_area row">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>{{ $perusahaan->nama_pers}}</h2>
                <h4>{!! $perusahaan->deskripsi !!}</h4>
            </div>
        </div>
    </section>
    <!-- End About Us Area -->


   <section class="latest_blog_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Lowongan Perusahaan</h2>
            </div>
            <div class="row latest_blog">
            @foreach($lowongan as $data)
                <div class="col-md-4 col-sm-6 blog_content">
                    <a href="#" class="blog_heading">{{ $data->nama_low}}</a>
                    <h4><small>Perusahaan  </small><a href="#">{{  $data->Perusahaan->nama_pers }}</a><span>/</span><small>Masa lowongan 2 bulan setelah terbit terhitung dari tanggal : </small> ">{{ $data->tgl_mulai }}</h4>
                    {!! str_limit($data->deskripsi_iklan, 200) !!} &nbsp&nbsp <a href="{{ url('rincilow',$data->id) }}">Selengkapnya</a>
                </div>
            @endforeach
            </div>
        </div>
    </section>

@endsection
