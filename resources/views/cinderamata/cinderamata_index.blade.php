@extends('layouts.master')

@section('content')

<ol class="breadcrumb">
    <li><a href="{{ url('master/cinderamata') }}"><i class="fa fa-tree"></i> Cinderamata</a></li>
    {{-- <li><a href="#">Edit Wisata</a></li> --}}
    {{-- <li class="active">Morris</li> --}}
</ol>

<div class="row">
    <div class="col-md-12">
        <center>
            <h2>{{ $title }}</h2>
            <h5>Memberikan Informasi Tentang Oleh-oleh atau Cinderamata Yang Ada Pada Wisata Tersebut</h5>
        </center>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                    <a href="{{ url('master/cinderamata/add' )}}" class="btn btn-sm btn-success"><i class="fa fa-plus"></i>Tambah Cinderamata</a>

                </p>
            </div>
            <div class="box-body">
                {{-- start --}}

                <table class="table table-hover myTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Wisata</th>
                            <th>Cinderamata</th>
                            {{-- <th>Deskripsi</th> --}}
                            <th>Harga</th>
                            <th>Gambar</th>
                            <th>Update At</th>
                            <th>Detail Wisata</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $e=>$dt)
                        <tr>
                            <td>{{ $e+1 }}</td>
                            <td>
                                                {{-- nama field yg ad di table m_cinderamata --}}
                                {{ $dt->wisata_w->nama }}
                                {{-- {{ $dt->wisata }} --}}
                            </td>
                            <td>{{ $dt->nama_cinderamata}}</td>
                            {{-- <td>{!! $dt->deskripsi !!}</td> --}}
                            <td>Rp. {{ number_format($dt->harga,0) }}</td>

                            <td>
                                {{-- gambar --}}
                                <img src="{{ asset('gambar_cinderamata/'.$dt->gambar) }}" style="width: 50px;">
                            </td>
                            <td>{{ date('d F Y',strtotime($dt->updated_at)) }}</td>
                            <td>
                                <a href="{{ url('cinderamata/detail/'.$dt->id) }}" class="btn bg-aqua btn-sm" id="delete"><i class="fa fa-eye"> </i> Detail</a>
                            </td>

                            <td>
                                <div style="width:60px">
                                    <a href="{{ url('master/cinderamata/'.$dt->id) }}" class="btn btn-warning btn-sm btn-edit" id="edit"><i class="fa fa-pencil-square-o"></i> Edit</a>
                                    <button href="{{ url('master/cinderamata/'.$dt->id) }}" class="btn btn-danger btn-sm btn-hapus" id="delete"><i class="fa fa-trash-o"></i> Delete</button>
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
