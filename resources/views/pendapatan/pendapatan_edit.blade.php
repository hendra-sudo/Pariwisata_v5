@extends('layouts.master')

@section('content')

<ol class="breadcrumb">
    <li><a href="{{ url('master/pendapatan') }}"><i class="fa fa-money"></i> Pendapatan </a></li>
    <li><a href="#">Edit Pendapatan</a></li>
    {{-- <li class="active">Morris</li> --}}
</ol>

<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <a href="{{ url('master/pendapatan')}}" class="btn bg-aqua btn-sm" ><i class="fa fa-backward"></i> Back</a>
                    <button class="btn btn-sm btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                </p>
            </div>
            <div class="box-body">

                {{-- start --}}

                <form role="form" action="{{ url('master/pendapatan/'.$dt->pendapatan_id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="box-body">


                        <div class="form-group">
                            <label for="exampleInputEmail1">Tahun</label>
                            <input type="number" name="tahun"  value="{{ $dt->tahun }}" class="form-control" id="exampleInputEmail1" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Jumlah Wisatawan Lokal</label>
                            <input type="number" name="wst_lokal"  value="{{ $dt->wst_lokal }}" class="form-control" id="exampleInputEmail1" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Jumlah Wisatawan Internasional</label>
                            <input type="number" name="wst_intl"  value="{{ $dt->wst_intl }}" class="form-control" id="exampleInputEmail1" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Pendapatan</label>
                            <input type="number" name="pendapatan"  value="{{ $dt->pendapatan }}" class="form-control" id="exampleInputEmail1" required>
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
