@extends('layouts.portal')

@section('content')
{{-- start --}}

<div id="post-header" class="page-header">
    <div class="background-img" style="background-image: url({{ asset('gambar_wisata/'.$wisata->gambar) }});"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="post-meta">

                    <span class="post-date">{{ date('d F Y',strtotime($wisata->created_at)) }}</span>
                </div>
                <h1>{{ $wisata->nama}}</h1>
            </div>
        </div>
    </div>
</div>

<div class="col-md-8">

    <div class="section-row sticky-container">
        <div class="main-post">
            <figure class="figure-img">
                <img class="img-responsive" src="{{ asset('gambar_wisata/'.$wisata->gambar) }}" alt="">
                {{-- <figcaption>{{ date('d F Y',strtotime($wisata->created_at)) }}</figcaption> --}}
            </figure>
            {{-- <h2>{{ $wisata->nama}}</h2> --}}
            <p>{!! $wisata->deskripsi !!}</p>
            </div>
        <div class="post-shares sticky-shares" style="position: absolute; top: 0px; left: 0px;">
            <a href="https://www.facebook.com/PemkabMalang" class="share-facebook"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com/" class="share-twitter"><i class="fa fa-twitter"></i></a>
            <a href="https://www.instagram.com/pemkotmalang/?hl=id" class="share-instagram"><i class="fa fa-instagram"></i></a>
            <a href="https://www.youtube.com/channel/UCPo6b6DOnJvve7ORpDUbkXA" class="share-youtube"><i class="fa fa-youtube"></i></a>
        </div>
    </div>



    <!-- ad -->
    <div class="section-row text-center">
        <a href="#" style="display: inline-block;margin: auto;">
            <img class="img-responsive" src="./img/ad-2.jpg" alt="">
        </a>
    </div>
    <!-- ad -->

    <!-- author -->
    <div class="section-row">
        <div class="post-author">
            <div class="media">
                <div class="media-left">
                    <img class="media-object" src="./img/author.png" alt="">
                </div>
                {{-- <div class="media-body">
                    <div class="media-heading">
                        <h3>John Doe</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <ul class="author-social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- /author -->

    <!-- comments -->
    {{-- <div class="section-row">
        <div class="section-title">
            <h2>3 Comments</h2>
        </div>

        <div class="post-comments">
            <!-- comment -->
            <div class="media">
                <div class="media-left">
                    <img class="media-object" src="./img/avatar.png" alt="">
                </div>
                <div class="media-body">
                    <div class="media-heading">
                        <h4>John Doe</h4>
                        <span class="time">March 27, 2018 at 8:00 am</span>
                        <a href="#" class="reply">Reply</a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                    <!-- comment -->
                    <div class="media">
                        <div class="media-left">
                            <img class="media-object" src="./img/avatar.png" alt="">
                        </div>
                        <div class="media-body">
                            <div class="media-heading">
                                <h4>John Doe</h4>
                                <span class="time">March 27, 2018 at 8:00 am</span>
                                <a href="#" class="reply">Reply</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                    <!-- /comment -->
                </div>
            </div>
            <!-- /comment -->

            <!-- comment -->
            <div class="media">
                <div class="media-left">
                    <img class="media-object" src="./img/avatar.png" alt="">
                </div>
                <div class="media-body">
                    <div class="media-heading">
                        <h4>John Doe</h4>
                        <span class="time">March 27, 2018 at 8:00 am</span>
                        <a href="#" class="reply">Reply</a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
            <!-- /comment -->
        </div>
    </div> --}}
    <!-- /comments -->

    <!-- reply -->
    {{-- <div class="section-row">
        <div class="section-title">
            <h2>Leave a reply</h2>
            <p>your email address will not be published. required fields are marked *</p>
        </div>
        <form class="post-reply">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <span>Name *</span>
                        <input class="input" type="text" name="name">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <span>Email *</span>
                        <input class="input" type="email" name="email">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <span>Website</span>
                        <input class="input" type="text" name="website">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <textarea class="input" name="message" placeholder="Message"></textarea>
                    </div>
                    <button class="primary-button">Submit</button>
                </div>
            </div>
        </form>
    </div> --}}
    <!-- /reply -->
</div>

{{-- end --}}
@endsection
