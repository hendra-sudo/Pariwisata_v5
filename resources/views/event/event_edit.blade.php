@extends('layouts.master')

@section('content')

<ol class="breadcrumb">
    <li><a href="{{ url('master/event') }}"><i class="fa fa-bookmark-o"></i> Events</a></li>
    <li><a href="#">Edit Events</a></li>
    {{-- <li class="active">Morris</li> --}}
</ol>

<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <a href="{{ url('master/event')}}" class="btn bg-aqua btn-sm " ><i class="fa fa-backward"></i> Back</a>
                    <button class="btn btn-sm btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                </p>
            </div>
            <div class="box-body">

                {{-- start --}}

                <form role="form" action="{{ url('master/event/'.$dt->event_id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Judul Events</label>
                            <input type="text" name="event_judul" value="{{ $dt->event_judul }}" class="form-control" id="exampleInputEmail1" placeholder="Makan Kerupuk" required>
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
                            <input type="text" name="penyelenggara" value="{{ $dt->event_penyelenggara }}" class="form-control" id="exampleInputEmail1" placeholder="Author" required>
                          </div>

                          <div class="form-group">
                            <label for="exampleInputEmail1">Tanggal Pelaksanaan</label>
                            <input type="text" name="tgl_pelaksanaan" value="{{ $dt->event_tgl }}" class="form-control datepicker" autocomplete="off" required>
                          </div>

                          <div class="form-group">
                            <label for="exampleInputEmail1">Deskripsi</label>
                            <textarea class="form-control summernote" name="deskripsi" required>{{ $dt->event_deskripsi }}</textarea>
                          </div>

                          <div class="form-group">
                            <label for="exampleInputEmail1">Tag</label>
                            <input type="text" name="tag" value="{{ $dt->event_tag }}" class="form-control" id="exampleInputEmail1" placeholder="Author" required>
                          </div>

                          <div class="form-group">
                            <label for="exampleInputFile">File Gambar</label>
                            {{-- <input type="file" name="image_event" id="exampleInputFile"> --}}
                            <input type="file" name="image_event" id="exampleInputFile">

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
