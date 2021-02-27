@extends('layouts.master')

@section('content')

<ol class="breadcrumb">
    <li><a href="{{ url('master/event') }}"><i class="fa fa-bookmark-o"></i> Events</a></li>
    <li><a href="#">Tambah Events</a></li>
    {{-- <li class="active">Morris</li> --}}
</ol>

<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <a href="{{ url('master/event')}}" class="btn bg-aqua btn-sm" ><i class="fa fa-backward"></i> Back</a>
                    <button class="btn btn-sm btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                </p>
            </div>
            <div class="box-body">
                {{-- validasi required --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {{-- end validasi --}}

                {{-- start --}}

                <form role="form" action="{{ url('master/event/add') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Judul Events</label>
                        <input type="text" name="event_judul" class="form-control" id="exampleInputEmail1" placeholder="Makan Kerupuk" required>
                      </div>

                      {{-- Select dari Tabel --}}
                      {{-- <div class="form-group">
                        <label for="exampleInputEmail1">Kategori Wisata</label>
                            <select class="form-control select2" name="kategori" id="">
                                <option selected="" disabled="" > Pilih kategori</option>
                                @foreach ($kategori as $kt)
                                    <option value="{{ $kt->kategori_id }}">{{ $kt->kategori_nama }}</option>
                                @endforeach

                            </select>
                      </div> --}}

                      <div class="form-group">
                        <label for="exampleInputEmail1">Penyelenggara Events</label>
                        <input type="text" name="penyelenggara" class="form-control" id="exampleInputEmail1" placeholder="Author" required>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Pelaksanaan</label>
                        <input type="text" name="tgl_pelaksanaan" class="form-control datepicker" autocomplete="off" >
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Deskripsi</label>
                        <textarea class="form-control summernote" name="deskripsi" required></textarea>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Tag</label>
                        <input type="text" name="tag" class="form-control" id="exampleInputEmail1" placeholder="Author" required>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputFile">File Gambar</label>
                        {{-- <input type="file" name="image_event" id="exampleInputFile"> --}}
                        <input type="file" name="image_event" id="exampleInputFile">

                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
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
