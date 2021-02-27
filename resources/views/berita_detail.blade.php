@extends('layouts.portal')

@section('content')

<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- Post content -->
            <div class="col-md-8">
                <div class="section-row sticky-container">
                    <div class="main-post">

                        <figure class="figure-img">
                            <img class="img-responsive" src="{{ asset('uploads_berita/'.$berita->berita_gambar) }}" alt="">
                            <figcaption>{{ date('d F Y',strtotime($berita->berita_tgl)) }}</figcaption>

                        <h3> - </h3>
                        <h3>{{ $berita->berita_judul}}</h3>
                        <p>{!! $berita->berita_deskripsi !!}</p>
                    </div>
                </div>
                <!-- ad -->
                <div class="section-row text-center">
                    <a href="#" style="display: inline-block;margin: auto;">
                        <img class="img-responsive" src="./img/ad-2.jpg" alt="">
                    </a>
                </div>
                <!-- ad -->
            </div>
            <!-- /Post content -->
       </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>

@endsection
