@extends('layouts.master')

@section('content')

<ol class="breadcrumb">
    <li><a href="{{ url('master/wisata_new') }}"><i class="fa fa-ticket"></i> Wisata</a></li>
    <li><a href="#">Detail Wisata</a></li>
    {{-- <li class="active">Morris</li> --}}
</ol>


<!-- Wisata -->
<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                {{-- <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                </p> --}}
            </div>
            <div class="box-body">
                {{-- start --}}
                <div class="row">
                    <div class="col-md-12">
                        <p>
                            <a href="{{ url('master/wisata_new')}}" class="btn bg-aqua btn-sm " ><i class="fa fa-backward"></i> Back</a>
                            <button class="btn btn-sm btn-warning btn-refresh" ><i class="fa fa-refresh"></i> Refresh</button>
                        </p>

                        <div class="box box-warning">
                            <div class="box-header">
                                <h4>{{ $title }}</h4>
                            </div>
                            <div class="box-body">
                                <table class="table">
                                    <thead>

                                        <tr>
                                            <th>Gambar</th>
                                            <td>:</td>
                                            <td><img src="{{ asset('uploads/'.$kt->gambar) }}" style="width: 100px;"></td>

                                        </tr>

                                        <tr>

                                            <th>Wisata URL</th>
                                            <td>:</td>
                                            <td>{{ $kt->url_video}}</td>


                                                <th>Kategori</th>
                                                <td>:</td>

                                                <td>

                                                    {{ $kt->kategori_w->kategori_nama}}

                                                </td>

                                        </tr>

                                        <tr>
                                            <th>Nama Wisata</th>
                                            <td>:</td>
                                            <td>{{ $kt->nama}}</td>

                                            <th>Wisata Tag</th>
                                            <td>:</td>
                                            <td>{{ $kt->wisata_tag}}</td>
                                        </tr>

                                        <tr>
                                            <th>HTM Lokal</th>
                                            <td>:</td>
                                            <td>Rp. {{ number_format($kt->htm_lokal,0) }}</td>

                                            <th>HTM Internasional</th>
                                            <td>:</td>
                                            <td>Rp. {{ number_format($kt->htm_intl,0) }}</td>
                                        </tr>

                                        <tr>
                                            <th>Latitude GPS</th>
                                            <td>:</td>
                                            <td>{{ $kt->latitude}}</td>

                                            <th>Longitude GPS</th>
                                            <td>:</td>
                                            <td>{{ $kt->longitude}}</td>
                                        </tr>


                                    </thead>

                                </table>
                                <div class="row">
                                    <div class="col-md-12">
                                        <tr>
                                            <h1>Deskripsi :</h1>
                                            <td></td>
                                            <td>{!! $kt->deskripsi !!}</td>
                                        </tr>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- end --}}
            </div>
        </div>
    </div>
</div>

<!-- Cinderamata -->
<div class="row">
    <div class="col-md-12">
        <h2>Cinderamata</h2>
        <div class="box box-warning">
            <div class="box-header">
                {{-- <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                </p> --}}
            </div>
            <div class="box-body">
                {{-- start --}}
                <div class="row">
                    <div class="col-md-12">
                        
                        <div class="box box-warning">
                            <div class="box-header">
                                <!-- <h4>{{ $title }}</h4> -->
                            </div>
                            <div class="box-body">
                                <table class="table">
                                    <thead>

                                        <tr>
                                            <th>Gambar</th>
                                            <td>:</td>
                                            <td><img src="{{ asset('uploads/'.$kt->gambar) }}" style="width: 100px;"></td>

                                        </tr>

                                        <tr>

                                            <th>Nama Cinderamata</th>
                                            <td>:</td>
                                            <td>{{ $data->cinderamata_r->nama_cinderamata}}</td>


                                            <th>Kategori</th>
                                                <td>:</td>

                                                <td>

                                                    {{ $kt->kategori_w->kategori_nama}}

                                                </td>

                                        </tr>

                                        <tr>
                                            <th>Nama Wisata</th>
                                            <td>:</td>
                                            <td>{{ $kt->nama}}</td>

                                            <th>Wisata Tag</th>
                                            <td>:</td>
                                            <td>{{ $kt->wisata_tag}}</td>
                                        </tr>

                                        <tr>
                                            <th>HTM Lokal</th>
                                            <td>:</td>
                                            <td>Rp. {{ number_format($kt->htm_lokal,0) }}</td>

                                            <th>HTM Internasional</th>
                                            <td>:</td>
                                            <td>Rp. {{ number_format($kt->htm_intl,0) }}</td>
                                        </tr>

                                        <tr>
                                            <th>Latitude GPS</th>
                                            <td>:</td>
                                            <td>{{ $kt->latitude}}</td>

                                            <th>Longitude GPS</th>
                                            <td>:</td>
                                            <td>{{ $kt->longitude}}</td>
                                        </tr>


                                    </thead>

                                </table>
                                <div class="row">
                                    <div class="col-md-12">
                                        <tr>
                                            <h1>Deskripsi :</h1>
                                            <td></td>
                                            <td>{!! $kt->deskripsi !!}</td>
                                        </tr>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- end --}}
            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')

<script type="text/javascript">
    $(document).ready(function(){

        // btn refresh
        $('.btn-refresh').click(function(e){
            e.preventDefault();
            $('.preloader').fadeIn();
            location.reload();
        })

    })
</script>

@endsection
