@extends('layouts.master')

@section('content')

<ol class="breadcrumb">
    <li><a href="{{ url('master/kontak') }}"><i class="fa fa-key"></i> Kontak</a></li>
    <li><a href="#">Edit Kontak</a></li>
    {{-- <li class="active">Morris</li> --}}
</ol>

<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <a href="{{ url('master/kontak')}}" class="btn bg-aqua btn-sm btn-flat" ><i class="fa fa-backward"></i> Back</a>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                </p>
            </div>
            <div class="box-body">

                {{-- start --}}

                <form role="form" action="{{ url('master/kontak/'.$dt->kontak_id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="box-body">

                <div class="form-group">
                    <label for="exampleInputEmail1">Latitude GPS</label>
                    <input type="text" name="latitude"  value="{{ $dt->latitude }}" class="form-control" id="exampleInputEmail1" placeholder="-7.983908">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Longitude GPS</label>
                    <input type="text" name="longitude"  value="{{ $dt->longitude }}" class="form-control" id="exampleInputEmail1" placeholder="112.621391">
                </div>

                {{-- <div class="form-group">
                    <label for="exampleInputEmail1">Judul Kontak</label>
                    <input type="text" name="kontak_judul"  value="{{ $dt->kontak_judul }}" class="form-control" id="exampleInputEmail1" placeholder="Kontak kami">
                </div> --}}

                <div class="form-group">
                    <label for="exampleInputEmail1">Deskripsi</label>
                    <textarea class="form-control summernote" name="kontak_deskripsi" required>{{ $dt->kontak_deskripsi }}</textarea>
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
