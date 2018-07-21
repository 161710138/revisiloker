@extends('layouts.frontend')

@section('content')
 <!-- Slider area -->
   <!--  <section class="slider_area row m0">
        <div class="slider_inner">
                    <div data-thumb="{{ asset('TopBuilder/images/slider-1.jpg')}}" data-src="{{ asset('TopBuilder/images/slider-1.jpg ')}}">
                <div class="camera_caption">
                   <div class="container">
                        <h5 class=" wow fadeInUp animated">Welcome to our</h5>
                        <h3 class=" wow fadeInUp animated" data-wow-delay="0.5s">CLEAN, MODERN, MULTIPURPOSE THEME</h3>
                        <p class=" wow fadeInUp animated" data-wow-delay="0.8s">Our team of professionals will help you turn your dream home or flat into a reality fast. The Love Boat promises something for everyone. Now the world don't move to the beat of just one</p>
                        <a class=" wow fadeInUp animated" data-wow-delay="1s" href="#">Read More</a>
                   </div>
                </div>
            </div>
            <div data-thumb="{{ asset('TopBuilder/images/slider-2.jpg')}}" data-src="{{ asset('TopBuilder/images/slider-2.jpg')}}">
                <div class="camera_caption">
                   <div class="container">
                        <h5 class=" wow fadeInUp animated">Welcome to our</h5>
                        <h3 class=" wow fadeInUp animated" data-wow-delay="0.5s">CLEAN ,MODERN, MULTIPURPOSE THEME</h3>
                        <p class=" wow fadeInUp animated" data-wow-delay="0.8s">Our team of professionals will help you turn your dream home or flat into a reality fast. The Love Boat promises something for everyone. Now the world don't move to the beat of just one</p>
                        <a class=" wow fadeInUp animated" data-wow-delay="1s" href="#">Read More</a>
                   </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End Slider area -->


    <!-- About Us Area -->
 
    <!-- End About Us Area -->

    <!-- What ew offer Area -->
    
    <!-- End What ew offer Area -->

    <!-- Our Features Area -->
   
    <!-- End Our Features Area -->

    <!-- Our Services Area -->
   
    <!-- End Our Services Area -->

    <!-- Our Team Area -->
    
    <!-- End Our Team Area -->

    <!-- Our Achievments Area -->
   
    <!-- End Our Achievments Area -->

    <!-- Our Testimonial Area -->
   
    <!-- End Our testimonial Area -->

    <!-- Our Featured Works Area -->
    <section class="featured_works row" data-stellar-background-ratio="0.3">
        <div class="tittle wow fadeInUp">
            <h2>Perusahaan Yang Terdaftar</h2>
            <h4>Telah Menyediakan Berbagai Lowongan Bagi Anda </h4>
        </div>
        <div class="featured_gallery">
        @foreach($perusahaan as $data)
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="{{ asset('assets/admin/images/icon/'.$data->logo)}}" alt="">
                <div class="gallery_hover">
                    <h4>{{$data->nama_pers}}</h4>
                    <a href="{{ url('rincianperusahaan',$data->id)}}">Lihat Lowongan</a>
                </div>
            </div>
        @endforeach
        </div>
    </section>
    <!-- End Our Featured Works Area -->

    <!-- Our Latest Blog Area -->
    <section class="latest_blog_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Lowongan Terbaru</h2>
            </div>
            <div class="row latest_blog">
            @foreach($lowongan as $data)
                <div class="col-md-4 col-sm-6 blog_content">
                    <a href="#" class="blog_heading">{{ $data->nama_low }}</a>
                    <h4><small> </small><a href="#">{{  $data->Perusahaan->nama_pers }}</a><span>/</span><small></small> {{ $data->lokasi}}</h4>
                    <p>{!! str_limit($data->deskripsi_iklan, 200) !!} &nbsp&nbsp <a href="{{ url('rincilow',$data->id) }}">Selengkapnya</a></p>
                </div>
            @endforeach
            </div>
        </div>
    </section>
       <!-- Professional Builde -->
    <section class="professional_builder row">
        <div class="container">
           <div class="row builder_all">
                <div class="col-md-3 col-sm-6 builder">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <h4>Professional </h4>
                    <p> </p>
                </div>
                <div class="col-md-3 col-sm-6 builder">
                    <i class="fa fa-building" aria-hidden="true"></i>
                    <h4>Terpercaya</h4>
<p></p>
                </div>
                <div class="col-md-3 col-sm-6 builder">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                    <h4>Membantu anda</h4>
                    <p></p>
                </div>
                
           </div>
        </div>
    </section>
    <!-- End Professional Builde -->


    <!-- Our Partners Area -->
    <section class="our_partners_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Mitra dan Partner</h2>
                <h4></h4>
            </div>
            <div class="partners">
                <div class="item"><img src="{{ asset('TopBuilder/images/client_logo/client_logo-1.png')}}" alt=""></div>
                <div class="item"><img src="{{ asset('TopBuilder/images/client_logo/client_logo-2.png')}}" alt=""></div>
                <div class="item"><img src="{{ asset('TopBuilder/images/client_logo/client_logo-3.png')}}" alt=""></div>
                <div class="item"><img src="{{ asset('TopBuilder/images/client_logo/client_logo-4.png')}}" alt=""></div>
                <div class="item"><img src="{{ asset('TopBuilder/images/client_logo/client_logo-5.png')}}" alt=""></div>
            </div>
        </div>
        <div class="book_now_aera">
            <div class="container">
                <div class="row book_now">
                    <div class="col-md-10 booking_text">
                        </p>
                    </div>
                    <div class="col-md-2 p0 book_bottun">
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Partners Area -->
@endsection