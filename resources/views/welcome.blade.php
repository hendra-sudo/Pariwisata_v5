
@extends('layouts.portal')



@section('content')

{{-- start portal_content --}}

<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2>Wisata Malang</h2>
                        </div>
                    </div>
                    {{-- Start --}}
                    {{-- end Start --}}
                    <!-- post -->
                    @foreach($wisata as $dt)
                    <div class="col-md-12">
                        <div class="post post-row">
                            <a class="post-img" href="{{ url('detail/'.$dt->wisata_id) }}"><img src="{{ asset('gambar_wisata/'.$dt->gambar) }}" alt="" style="width: 300px;"></a>
                            <div class="post-body">
                                <div class="post-meta">
                                    <a class="post-category cat-2" href="category.html">{{ $dt->kategori_w->kategori_nama}}</a>
                                    <span class="post-date">{{ date('d F Y',strtotime($dt->created_at)) }}</span>
                                </div>
                                <h3 class="post-title"><a href="{{ url('detail/'.$dt->wisata_id) }}">{{ $dt->nama}}</a></h3>
                                {{-- <p>{!! $dt->deskripsi !!} ...</p> --}}
                                <p>{!! substr($dt->deskripsi,0,350) !!} ...</p>

                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{ $wisata->links() }}

                </div>
            </div>

            <div class="col-md-4">
                <!-- ad -->

                <!-- /ad -->

                <!-- catagories -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2>Catagories</h2>
                    </div>
                    <div class="category-widget">
                        <?php
                                $kategoris = \DB::table('m_kategori')->orderBy('kategori_nama','asc')->get();
                        ?>
                        <?php
                               $total = \DB::table('m_wisata')->where('kategori',$dt->wisata_id)->count();
                        ?>
                        <ul>
                            @foreach($kategoris as $kt)
                            {{-- <li><a href="#" class="cat-1">Web Design<span>340</span></a></li> --}}
                            <li><a href="{{ url('wisata/kategori/'.$kt->kategori_id)}}" class="cat-2">{{ $kt->kategori_nama }}<span>(-_-)</span></a></li>
                            {{-- <li><a href="#" class="cat-4">JQuery<span>41</span></a></li> --}}
                            {{-- <li><a href="#" class="cat-3">CSS<span>35</span></a></li> --}}
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- /catagories -->

                <!-- tags -->

                <!-- /tags -->
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>

{{-- End portal_content --}}

@endsection







{{-- ============================================ Start ========================================--}}
{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pariwisa Malang</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth

                        <a href="{{ route('login') }}">Login</a>
                    @else
                        <a href="{{ url('/home') }}">Home</a>
                        <a href="{{ route('login') }}">Login</a>


                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Pariwisata Malang
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html> --}}

{{-- ============================================ End ========================================--}}
