@extends('layouts.master')

@section('content')

<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-user"></i> Manage Profile</a></li>
    {{-- <li><a href="#">Charts</a></li>
    <li class="active">Morris</li> --}}
</ol>

<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                    <a href="{{ url('master/profile/add' )}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>Tambah Users</a>

                </p>
            </div>
            <div class="box-body">
                {{-- start --}}

                <table class="table table-hover myTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email User</th>
                            <th>Kecamatan</th>
                            <th>Desa</th>
                            <th>Password</th>
                            <th>Created At</th>
                            {{-- <th>Harga</th>
                            <th>Gambar</th>
                            <th>Update At</th>--}}
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $e=>$dt)
                        <tr>
                            <td>{{ $e+1 }}</td>
                            <td>
                                {{ $dt->name }}
                                {{-- {{ $dt->wisata }} --}}
                            </td>
                            <td>{{ $dt->email }}</td>
                            <td>{{ $dt->kecamatan }}</td>
                            <td>{{ $dt->desa }}</td>
                            
                            <td>{{ $dt->lihat_pw }}</td>
                            <td>
                                {{ date('d F Y',strtotime($dt->created_at)) }}
                            </td>
                            {{-- <td>
                                Rp. {{ number_format($dt->harga,0) }}
                            </td> --}}
                            {{-- <td>
                                Gambar
                                <img src="{{ asset('gambar_kuliner/'.$dt->gambar) }}" style="width: 50px;">
                            </td> --}}
                            {{-- <td>
                                {{ date('d F Y',strtotime($dt->created_at)) }}
                            </td> --}}
                            <td>
                                <div style="width:60px">
                                    <a href="{{ url('master/profile/'.$dt->id) }}" class="btn  btn-warning btn-sm " id="edit">EDIT</a>
                                    <button href="{{ url('master/profile/'.$dt->id) }}" class="btn btn-danger btn-sm  " id="delete"></i>HAPUS</button>
                                    {{-- <i class="fa fa-trash-o"> --}}
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
