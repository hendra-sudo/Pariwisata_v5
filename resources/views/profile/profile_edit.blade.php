@extends('layouts.master')

@section('content')

<ol class="breadcrumb">
    <li><a href="{{ url('master/profile')}}"><i class="fa fa-user"></i> Manage Profile</a></li>
    <li><a href="#">Edit Users</a></li>
    {{-- <li class="active">Morris</li> --}}
</ol>

<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <a href="{{ url('master/profile')}}" class="btn btn-primary btn-sm " ><i class="fa fa-backward"></i> Back</a>
                    <button class="btn btn-warning btn-sm btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                </p>
            </div>
            <div class="box-body">

                {{-- start --}}

                <form role="form" action="{{ url('master/profile/'.$dt->id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="box-body">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap"  value="{{ $dt->nama_lengkap }}" class="form-control" id="exampleInputEmail1" placeholder="Nama Pengguna">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat</label>
                            <input type="text" name="alamat"  value="{{ $dt->alamat }}" class="form-control" id="exampleInputEmail1" placeholder="Alamat Pengguna">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nomor Handphone</label>
                            <input type="number" name="no_hp"  value="{{ $dt->no_hp }}" class="form-control" id="exampleInputEmail1" placeholder="Nomor Pengguna">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" name="name"  value="{{ $dt->name }}" class="form-control" id="exampleInputEmail1" placeholder="Nama User">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" name="email"  value="{{ $dt->email }}" class="form-control" id="exampleInputEmail1" placeholder="user@gmail.com">
                        </div>


                    <!-- /.box-body -->

                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                  </form>

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
