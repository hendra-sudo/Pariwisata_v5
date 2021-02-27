@extends('layouts.master')

@section('content')

<ol class="breadcrumb">
    <li><a href="{{ url('master/pendapatan') }}"><i class="fa fa-money"></i> Pendapatan </a></li>
    <li><a href="#">Tambah Pendapatan</a></li>
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

                <form role="form" action="{{ url('master/pendapatan/add') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Tahun</label>
                            <input type="number" name="tahun" class="form-control" id="exampleInputEmail1" placeholder="2021" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Jumlah Wisatawan Lokal</label>
                            <input type="number" name="wst_lokal" class="form-control" id="exampleInputEmail1" placeholder="12.0000.0000,-" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Jumlah Wisatawan Internasional</label>
                            <input type="number" name="wst_intl" class="form-control" id="exampleInputEmail1" placeholder="8.0000.0000,-" required>
                        </div>

                        <div class="form-group">
                           <label for="exampleInputEmail1">Pendapatan</label>
                           <input type="number" name="pendapatan" class="form-control" id="exampleInputEmail1" placeholder="Rp. 80.000.000,-" required>
                       </div>


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
