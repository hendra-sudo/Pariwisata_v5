@extends('layouts.master')

@section('content')

<ol class="breadcrumb">
    <li><a href="{{ url('master/about') }}"><i class="fa fa-book"></i> About </a></li>
    <li><a href="#">Edit About</a></li>
    {{-- <li class="active">Morris</li> --}}
</ol>

<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <a href="{{ url('master/about')}}" class="btn bg-aqua btn-sm btn-flat" ><i class="fa fa-backward"></i> Back</a>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                </p>
            </div>
            <div class="box-body">

                {{-- start --}}

                <form role="form" action="{{ url('master/about/'.$dt->about_id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="box-body">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Deskripsi</label>
                            <textarea class="form-control summernote" name="deskripsi" required>{{ $dt->about_deskripsi }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Status</label>
                            <input type="text" name="status" value="{{ $dt->status }}"class="form-control" id="exampleInputEmail1" placeholder="" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">File Gambar</label>
                            {{-- <input type="file" name="image_about" id="exampleInputFile"> --}}
                            <input type="file" name="image_about" id="exampleInputFile">
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
