<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="http://localhost/pariwisata/assets/images/icon.png" type="image/x-icon" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>Pariwisata Kabupaten Malang</title>

        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet">

        <!-- Bootstrap -->
        <link type="text/css" rel="stylesheet" href="{{ asset('webmag/css/bootstrap.min.css') }}"/>


        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="{{ asset('webmag/css/font-awesome.min.css') }}">

        <!-- Custom stlylesheet -->
        <link type="text/css" rel="stylesheet" href="{{ asset('webmag/css/style.css') }}"/>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>

        <!-- Header -->
        <header id="header">
            <!-- Nav -->
            <div id="nav">
                <!-- Main Nav -->
                <div id="nav-fixed">
                    <div class="container">
                        <!-- logo -->
                        <div class="nav-logo">
                            <a href="{{ url('/')}}" class="logo"><img src="{{ asset('logo.png') }}" style="width: 75px;" alt=""></a>
                        </div>
                        <!-- /logo -->

                        <!-- nav -->
                        <?php
                            $kategoris = \DB::table('m_kategori')->orderBy('kategori_nama','asc')->get();
                        ?>

                        <ul class="nav-menu nav navbar-nav">

                            <li class="cat-2"><a href="{{ url('/')}}">Home</a></li>
                            @foreach($kategoris as $kt)
                            {{-- <li><a href="category.html">News</a></li> --}}
                            <li class="cat-1"><a href="{{ url('wisata/kategori/'.$kt->kategori_id)}}">{{ $kt->kategori_nama }}</a></li>
                            {{-- <li class="cat-2"><a href="category.html">JavaScript</a></li> --}}
                            {{-- <li class="cat-3"><a href="category.html">Css</a></li> --}}
                            {{-- <li class="cat-4"><a href="category.html">Jquery</a></li> --}}
                            @endforeach
                        </ul>
                        <!-- /nav -->

                        <!-- search & aside toggle -->

                        <div class="nav-btns">
                            {{-- <button class="aside-btn"><i class="fa fa-bars"></i></button> --}}
                            <button class="search-btn"><i class="fa fa-search"></i></button>
                            <form method="get" action="{{ url('search') }}">
                                <div class="search-form">
                                    <input class="search-input" type="text" name="search" placeholder="Enter Your Search ...">
                                    <button type="submit" class="search-close"><i class="fa fa-times"></i></button>
                                </div>
                            </form>
                        </div>
                        <!-- /search & aside toggle -->
                    </div>
                </div>
                <!-- /Main Nav -->
                <!-- Aside Nav -->
                <div id="nav-aside">
                    <!-- nav -->
                    <div class="section-row">
                        <ul class="nav-aside-menu">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="#">Join Us</a></li>
                            <li><a href="#">Advertisement</a></li>
                            <li><a href="contact.html">Contacts</a></li>
                        </ul>
                    </div>
                    <!-- /nav -->

                    <!-- widget posts Recent Posts -->
                    <div class="section-row">
                        <h3>Recent Posts</h3>
                        <div class="post post-widget">
                            <a class="post-img" href="blog-post.html"><img src="{{ asset('webmag/img/widget-2.jpg') }}" alt=""></a>
                            <div class="post-body">
                                <h3 class="post-title"><a href="blog-post.html">Pagedraw UI Builder Turns Your Website Design Mockup Into Code Automatically</a></h3>
                            </div>
                        </div>

                        <div class="post post-widget">
                            <a class="post-img" href="blog-post.html"><img src="{{ asset('webmag/img/widget-3.jpg') }}" alt=""></a>
                            <div class="post-body">
                                <h3 class="post-title"><a href="blog-post.html">Why Node.js Is The Coolest Kid On The Backend Development Block!</a></h3>
                            </div>
                        </div>

                        <div class="post post-widget">
                            <a class="post-img" href="blog-post.html"><img src="{{ asset('webmag/img/widget-4.jpg') }}" alt=""></a>
                            <div class="post-body">
                                <h3 class="post-title"><a href="blog-post.html">Tell-A-Tool: Guide To Web Design And Development Tools</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- /widget posts -->

                    <!-- social links -->
                    <div class="section-row">
                        <h3>Follow us</h3>
                        <ul class="nav-aside-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                    <!-- /social links -->

                    <!-- aside nav close -->
                    <button class="nav-aside-close"><i class="fa fa-times"></i></button>
                    <!-- /aside nav close -->
                </div>
                <!-- Aside Nav -->
            </div>
            <!-- /Nav -->
        </header>
        <!-- /Header -->

        <!-- section -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                @include('layouts.berita_event')
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>

        <!-- section -->
        @yield('content')
        <!-- /section -->

        <!-- Footer -->
        <footer id="footer" >
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-5">
						<div class="col-md-5">
                            <div class="footer-widget">
                                <div class="footer-logo">
                                    <a href="index.html" class="logo"><img src="{{ asset('malang_logo_wh.png') }}" style="width:300px;" alt=""></a>
                                </div>
                            </div>
                        </div>
					</div>

					<?php
                    $about = \DB::table('m_about')->get();
                    ?>

                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-6">
                                @foreach($about as $dt)
                                <div class="footer-widget">
                                    <h3 class="footer-title" style="color: #00BFFF">Sekilas Pandang</h3>
                                    <ul class="footer-links">
                                        <li style="color: black">{!! $dt->about_deskripsi !!}</li>
                                </div>
                                @endforeach
                            </div>
                            <?php
                                 $kategoris = \DB::table('m_kategori')->orderBy('kategori_nama','asc')->get();
                            ?>

                            <div class="col-md-6">
                                <div class="footer-widget">
                                    <h3 class="footer-title" style="color: #00BFFF">Jenis Wisata</h3>
                                    @foreach($kategoris as $dt)
                                    <ul class="footer-links">
                                        <li><a href="{{ url('wisata/kategori/'.$kt->kategori_id)}}">{{ $dt->kategori_nama }}</a></li>
                                    </ul>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

					<div class="col-md-3">
						<div class="footer-widget">
							<h3 class="footer-title" style="color: #00BFFF">Follow Us</h3>
							<ul class="post-shares sticky-shares footer-social">
								<li><a href="https://www.facebook.com/PemkabMalang" class="share-facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://twitter.com/" class="share-twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://www.instagram.com/pemkotmalang/?hl=id" class="share-instagram"><i class="fa fa-instagram"></i></a></li>
								<li><a href="https://www.youtube.com/channel/UCPo6b6DOnJvve7ORpDUbkXA" class="share-youtube"><i class="fa fa-youtube"></i></a></li>
							</ul>
						</div>
					</div>


				</div>
				<!-- /row -->
                <div class="copyright">
                    <center><p>Copyright Pemerintah Kabupaten Malang &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.</p></center>
                </div>

			</div>

			<!-- /container -->
		</footer>



        <!-- jQuery Plugins -->
        <script src="{{ asset('webmagjs/jquery.min.js') }}"></script>
        <script src="{{ asset('webmag/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('webmag/js/main.js') }}"></script>

    </body>
</html>
