@extends('layouts.master')

@section('content')

<ol class="breadcrumb">
    <li><a href="{{ url('master/wahana') }}"><i class="fa fa-bicycle"></i> Wahana </a></li>
    <li><a href="#">Detail Wahana</a></li>
    {{-- <li class="active">Morris</li> --}}
</ol>

<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-flat btn-sm btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                    {{-- <a href="{{ url('master/wisata/add' )}}" class="btn btn-flat btn-sm btn-primary"><i class="fa fa-plus"></i>Tambah User</a> --}}
                    <a href="{{ url('master/wahana')}}" class="btn bg-aqua btn-sm btn-flat" ><i class="fa fa-backward"></i> Back</a>
                </p>
            </div>
            <div class="box-body">
                {{-- start --}}

                <table class="table table-hover myTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            {{-- <th>Wisata</th> --}}
                            <th>Wahana</th>
                            <th>Harga</th>
                            <th>Deskripsi</th>
                            <th>Update At</th>

                            {{-- <th>Action</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data->detail as $e=>$dt)
                        <tr>
                            <strong>{{ $loop->iteration }}</strong>
                            <td>{{ $e+1 }}</td>
                            <td>{{ $dt->nama_wahana }}</td>
                            <td>Rp. {{ number_format($dt->harga,0) }}</td>
                            <td>{!! $dt->deskripsi !!}</td>
                            <td>{{ date('d F Y',strtotime($dt->updated_at)) }}</td>

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
