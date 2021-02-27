@extends('layouts.master')

@section('content')

<ol class="breadcrumb">
    <li><a href="{{ url('master/berita') }}"><i class="fa fa-calendar"></i> Berita</a></li>
    <li><a href="#">Edit Berita</a></li>
    {{-- <li class="active">Morris</li> --}}
</ol>

<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <a href="{{ url('master/berita')}}" class="btn bg-aqua btn-sm " ><i class="fa fa-backward"></i> Back</a>
                    <button class="btn btn-sm btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                </p>
            </div>
            <div class="box-body">

                {{-- start --}}

                <form role="form" action="{{ url('master/berita/'.$dt->berita_id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="box-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Judul Berita</label>
                        <input type="text" name="berita_judul" value="{{ $dt->berita_judul }}" class="form-control" id="exampleInputEmail1" placeholder="Gulat pantai" required>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Deskripsi</label>
                        <textarea class="form-control summernote" name="berita_deskripsi" required>{{ $dt->berita_deskripsi }}</textarea>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Pelaksanaan</label>
                        <input type="text" name="berita_tgl" value="{{ $dt->berita_tgl }}" class="form-control datepicker" autocomplete="off" >
                      </div>



                      <div class="form-group">
                        <label for="exampleInputEmail1">Author</label>
                        <input type="text" name="berita_autor" value="{{ $dt->berita_autor }}" class="form-control" id="exampleInputEmail1" placeholder="Author" required>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputFile">File Gambar</label>
                        <input type="file" name="berita_gambar" id="exampleInputFile">

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
