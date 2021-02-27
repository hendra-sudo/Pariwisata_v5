@extends('layouts.master')

@section('content')

<ol class="breadcrumb">
    <li><a href="{{ url('master/berita') }}"><i class="fa fa-calendar"></i> Berita</a></li>
    {{-- <li><a href="#">Tambah Kategori</a></li> --}}
    {{-- <li class="active">Morris</li> --}}
</ol>

<div class="row">
    <div class="col-md-12">
        <center>
            <h2>{{ $title }}</h2>
            <h5>Halaman Untuk Sebuah Berita</h5>
        </center>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                    <a href="{{ url('master/berita/add' )}}" class="btn btn-sm btn-success"><i class="fa fa-plus"></i>Tambah Wisata</a>

                </p>
            </div>
            <div class="box-body">
                {{-- start --}}

                <table class="table table-hover myTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Judul Berita</th>
                            <th>Tanggal Pelaksanaan</th>
                            <th>Author</th>
                            <th>Gambar </th>
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
                            <td>{{ $dt->berita_judul}}</td>
                            <td>{{ date('d F Y',strtotime($dt->berita_tgl)) }}</td>
                            <td>{{ $dt->berita_autor}}</td>

                            <td>
                                {{-- gambar --}}
                                <img src="{{ asset('uploads/'.$dt->berita_gambar) }}" style="width: 50px;">
                            </td>

                            <td>
                                <div style="width:60px">
                                    <a href="{{ url('master/berita/'.$dt->berita_id) }}" class="btn btn-warning btn-SM btn-edit" id="edit"><i class="fa fa-pencil-square-o"></i>Edit</a>
                                    <button href="{{ url('master/berita/'.$dt->berita_id) }}" class="btn btn-danger btn-SM btn-hapus" id="delete"><i class="fa fa-trash-o"></i>Delete</button>
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
