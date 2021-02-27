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
                            <img class="img-responsive" src="{{ asset('uploads_event/'.$event->event_gambar) }}" alt="">
                            <figcaption>{{ date('d F Y',strtotime($event->event_tgl)) }}</figcaption>

                        <h3> - </h3>
                        <h3>{{ $event->event_judul}}</h3>
                        <p>{!! $event->event_deskripsi !!}</p>
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
