@extends('layout.client')
@section('judul')
    Tentang | LSP P3 GEOMATIKA
@endsection
@section('profil2')
    active
@endsection
@section('isi')
    <!-- ***** Header ***** -->
    <div style="background-image: url('{{ asset('general/assets/images/head1.jpg') }}')" class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Lembaga Sertifikasi Profesi GEOMATIKA</h1>
                    <span>
                        <a href="#profil">Profil singkat</a> /
                        <a href="#visi">Visi</a> /
                        <a href="#visi">Misi</a> /
                        <a href="#visi">Motto</a> /
                        <a href="#logo">Logo</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Akhir Header ***** -->

    <!-- ***** Konten ***** -->
    <!-- Profil singkat -->
    <div  class="more-info">
    @foreach ($profil2 as $asu)
        <div class="container">
            <div id="profil" class="section-heading">
                <h2>Tentang LSP GEOMATIKA<em></em></h2>
                <span>▬▬▬▬▬<em>▬▬▬▬▬</em></span>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="more-info-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="left-content">
                                    <span>Lembaga Sertifikasi Profesi Pihak Ketiga GEOMATIKA</span>
                                    <ul class="u-custom-font u-font-arial u-text u-text-2"
                                        data-animation-name="customAnimationIn" data-animation-duration="1000">                                      
                                        {!! $asu->profil !!}
                                        </li><br>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <!-- Visi misi motto -->
    <div id="visi" class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Visi, Misi & Motto<em></em></h2>
                        <span>▬▬▬▬▬<em>▬▬▬▬▬</em></span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="owl-testimonials owl-carousel">
                        <div class="testimonial-item">
                            <div class="inner-content">
                                <h4>Visi</h4>
                                {!! $asu->visi !!}</br>
                               
                                <h4>Motto</h4><br>
                                {!! $asu->motto !!}
                                <!-- <p>"Asesor Hebat, TUK Bisa, LSP Geomatika Tepercaya!"</p>--> 
                                <br><br><br><br>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="inner-content">
                                <h4>Misi</h4><br>
                                {!!$asu->misi !!}
                                <!-- <p>1. Mengembangkan Kualitas SDM di bidang Geomatika dengan sistem Sertifikasi Kompetensi Profesi yang tepercaya.</p>
                                <p>2. Meningkatkan, menjalankan rekognisi dan daya saing Tenaga Kerja Indonesia di Dalam maupun di Luar Negeri.</p>
                                <p>3. Membangun saling kerjasama serta saling pengakuan Sertifikasi Kompetisi secara Nasional dan Internasional.</p>
                                <p>4. Memberikan pelayanan standar uji kompetensi yang mengutamakan mutu serta menjamin bahwa pengujian yang dilakukan oleh para assesor handal dan  dilaksanakan dengan kejujuran teknik, teliti, cepat, tepat, akurat dan efisien.</p>
--> 
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Logo 
    <div id="logo" class="more-info about-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="more-info-content">
                        <div class="row">
                            <div class="col-md-8 align-self-center">
                                <div class="right-content">
                                    <h2>Makna Logo LSP GEOMATIKA<em> </em></h2>
                                    <ol class="text-dark">
                                        <li>LSP, merupakan singkatan dari Lembaga Sertifikasi Profesi; </li>
                                        <li>P3 GEOMATIKA, merupakan singkatan dari GEOMATIKA;</li>
                                        <li></li>
                                        <li>Lingkaran berwarna biru bola dunia, menunjukkan eksistensi
                                            perjuangan Lembaga Sertifikasi Profesi GEOMATIKA (LSP P3 GEOMATIKA)
                                            hingga ketingkat internasional; </li>
                                        <li>Simbol centang berwarna merah di dalam lingkaran, merupakan gambaran dari
                                            komitmen perjuangan Lembaga Sertifikasi Profesi GEOMATIKA
                                            (LSP-P3 GEOMATIKA) untuk menghasilkan sumberdaya manusia yang berkualitas. </li>
                                    </ol>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="left-image-logo">
                                    <img src="{{ asset('general/assets/images/lsp_big.png') }}"> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <br><br><br><br>
    <!-- ***** Akhir Konten ***** -->
@endsection
