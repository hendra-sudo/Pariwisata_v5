@extends('layouts.master')

@section('content')

<ol class="breadcrumb">
    <li><a href="{{ url('master/kategori') }}"><i class="fa fa-reorder"></i> Kategori</a></li>
    <li><a href="#">Tambah Kategori</a></li>
    {{-- <li class="active">Morris</li> --}}
</ol>


<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                    <a href="javascript:history.back()" class="btn btn-primary btn-sm">Kembali</a>
                </p>
            </div>
            <div class="box-body">

                <form role="form" action="{{ url('master/kategori/add') }}" method="post">
                    {{ csrf_field() }}
                    <div class="box-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nama Kategori</label>
                        <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama Kategori" required>
                      </div>
                      {{-- <div class="form-group">
                        <label for="exampleInputPassword1">Masukkan Gambar</label>
                        <input type="text" name="nama_2" class="form-control" id="exampleInputPassword1" placeholder="Nama Kategori">
                      </div> --}}
                      {{-- <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <input type="file" id="exampleInputFile">

                        <p class="help-block">Example block-level help text here.</p>
                      </div> --}}

                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>

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
