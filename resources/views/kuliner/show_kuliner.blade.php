@extends('layouts.master')

@section('content')

<ol class="breadcrumb">
    <li><a href="{{ url('master/kuliner') }}"><i class="fa fa-leaf"></i> Kuliner </a></li>
    <li><a href="#">Detail Kuliner</a></li>
    {{-- <li class="active">Morris</li> --}}
</ol>

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
                            <a href="{{ url('master/kuliner')}}" class="btn bg-aqua btn-sm" ><i class="fa fa-backward"></i> Back</a>
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
                                            <td><img src="{{ asset('gambar_kuliner/'.$dt->gambar) }}" style="width: 100px;"></td>
                                        </tr>

                                        <tr>
                                            <th>Nama Kuliner</th>
                                            <td>:</td>
                                            <td>{{ $dt->nama_kuliner}}</td>

                                            <th>Wisata</th>
                                            <td>:</td>
                                            <td>{{ $dt->wisata_w->nama}}</td>
                                        </tr>

                                        <tr>
                                            <th>Harga Cinderamata</th>
                                            <td>:</td>
                                            <td>Rp. {{ number_format($dt->harga,0) }}</td>
                                        </tr>
                                    </thead>

                                </table>
                                <div class="row">
                                    <div class="col-md-12">
                                        <tr>
                                            <h1>Deskripsi :</h1>
                                            <td></td>
                                            <td>{!! $dt->deskripsi !!}</td>
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
