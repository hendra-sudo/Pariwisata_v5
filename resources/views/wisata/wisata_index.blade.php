@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-flat btn-sm btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                    <a href="{{ url('master/wisata/add' )}}" class="btn btn-flat btn-sm btn-success"><i class="fa fa-plus"></i>Tambah Wisata</a>

                </p>
            </div>
            <div class="box-body">
                {{-- start --}}

                <table class="table table-hover myTable">
                    <thead>
                        <tr>
                            <th>Action</th>
                            <th>#</th>
                            <th>Kategori</th>
                            <th>Nama Wisata</th>
                            {{-- <th>Deskripsi</th> --}}
                            <th>Tag</th>
                            <th>HTM lokal</th>
                            <th>HTM Internasional</th>
                            <th>Gambar</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $e=>$dt)
                        <tr>
                            <td>
                                <div style="width:80px">
                                    <a href="{{ url('master/wisata/'.$dt->wisata_id) }}" class="btn btn-warning btn-xs btn-edit" id="edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <button href="{{ url('master/wisata/'.$dt->wisata_id) }}" class="btn btn-danger btn-xs btn-hapus" id="delete"><i class="fa fa-trash-o"></i></button>
                                    <a href="{{ url('wisata/detail/'.$dt->wisata_id) }}" class="btn bg-aqua btn-xs" id="delete"><i class="fa fa-eye"></i></a>
                                </div>
                            </td>
                            <td>{{ $e+1 }}</td>
                            <td>
                                {{ $dt->kategori_nama}}
                                {{-- {{ $dt->kategori_r->kategori_nama }} --}}
                            </td>
                            <td>{{ $dt->nama}}</td>
                            {{-- <td>{{ $dt->deskripsi}}</td> --}}
                            <td>{{ $dt->wisata_tag}}</td>
                            <td>Rp. {{ number_format($dt->htm_lokal,0) }}</td>

                            {{-- <td>Rp. {{ $dt->htm_lokal}}</td> --}}
                            <td>Rp. {{ number_format($dt->htm_intl,0) }}</td>


                            <td>
                                {{-- gambar --}}
                                <img src="{{ asset('gambar_wisata/'.$dt->gambar) }}" style="width: 50px;">
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
