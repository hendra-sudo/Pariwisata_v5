@extends('layouts.master')

@section('content')

<ol class="breadcrumb">
    <li><a href="{{ url('master/kontak') }}"><i class="fa fa-key"></i> Kontak</a></li>
    {{-- <li><a href="#">Edit Kontak</a></li> --}}
    {{-- <li class="active">Morris</li> --}}
</ol>

<div class="row">
    <div class="col-md-12">
        <center>
            <h2>{{ $title }}</h2>
            <h5>Menambahkan Alamat Kontak Pada halaman Website</h5>
        </center>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn  btn-sm btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                    {{-- <a href="{{ url('master/kontak/add' )}}" class="btn btn-flat btn-sm btn-success"><i class="fa fa-plus"></i>Tambah Wisata</a> --}}

                </p>
            </div>
            <div class="box-body">
                {{-- start --}}

                <table class="table table-hover myTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Longitude</th>
                            <th>Latitude</th>
                            {{-- <th>Kontak Judul</th> --}}
                            <th>Deskripsi</th>
                            <th>Update At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $e=>$dt)
                        <tr>
                            <td>{{ $e+1 }}</td>
                            {{-- <td>
                                {{ $dt->kategori_nama}}
                                {{ $dt->kategori_r->kategori_nama }}
                            </td> --}}
                            <td>{{ $dt->longitude}}</td>
                            <td>{{ $dt->latitude}}</td>
                            {{-- <td>{{ $dt->kontak_judul}}</td> --}}
                            <td>{!! $dt->kontak_deskripsi !!}</td>
                            <td>{{ date('d F Y',strtotime($dt->updated_at)) }}</td>


                            <td>
                                <div style="width:60px">
                                    <a href="{{ url('master/kontak/'.$dt->kontak_id) }}" class="btn btn-warning btn-sm btn-edit" id="edit"><i class="fa fa-pencil-square-o"></i> Edit</a>
                                    {{-- <button href="{{ url('master/kontak/'.$dt->kontak_id) }}" class="btn btn-danger btn-xs btn-hapus" id="delete"><i class="fa fa-trash-o"></i></button> --}}
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

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
