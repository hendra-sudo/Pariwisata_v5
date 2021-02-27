@extends('layouts.master')

@section('content')


<ol class="breadcrumb">
    <li><a href="{{ url('master/profile')}}"><i class="fa fa-reorder"></i> Kategori</a></li>
    {{-- <li><a href="#">Edit Users</a></li> --}}
    {{-- <li class="active">Morris</li> --}}
</ol>

<div class="row">
    <div class="col-md-12">
        <center>
            <h2>{{ $title }}</h2>
            <h5>Kategori Yang Ada di Daerah Malang</h5>
        </center>
        <div class="box box-warning">
            <div class="box-header">
                <p>

                    <button class="btn btn-sm btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                    <a href="{{ url('master/kategori/add' )}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>Tambah Kategori</a>
                </p>
            </div>
            <div class="box-body">

                <div class="table-responsive">
                    <table class="table table-hover myTable">
                        <thead>
                            <th>#</th>
                            <th>Nama Kategori</th>
                            {{-- <th>Gambar</th> --}}
                            <th>Created At</th>
                            <th>Action</th>
                        </thead>

                        <tbody>
                        @foreach ($data as $e=>$dt)
                            <tr>
                                <td>{{ $e+1 }}</td>
                                <td>{{ $dt->kategori_nama }}</td>
                                {{-- <td>{{ $dt->kategori_icon }}</td> --}}
                                <td>{{ date('d F Y',strtotime($dt->created_at)) }}</td>

                                <td>
                                    <div style="width:60px">
                                        <a href="{{ url('master/kategori/'.$dt->kategori_id) }}" class="btn btn-warning btn-sm btn-edit" id="edit"><i class="fa fa-pencil-square-o"> </i> Edit</a>
                                        <button href="{{ url('master/kategori/'.$dt->kategori_id) }}" class="btn btn-danger btn-sm btn-hapus" id="delete"><i class="fa fa-trash-o"></i> Delete</button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>

                </div>


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
