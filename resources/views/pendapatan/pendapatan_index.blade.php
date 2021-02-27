@extends('layouts.master')

@section('content')

<ol class="breadcrumb">
    <li><a href="{{ url('master/pendapatan') }}"><i class="fa fa-money"></i> Pendapatan </a></li>
    {{-- <li><a href="#">Detail Wahana</a></li> --}}
    {{-- <li class="active">Morris</li> --}}
</ol>

<div class="row">
    <div class="col-md-12">
        <center>
            <h2>{{ $title }}</h2>
            <h5>Memberikan Informasi Tentang Pendapatan PerTahun</h5>
        </center>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                    <a href="{{ url('master/pendapatan/add' )}}" class="btn btn-sm btn-success"><i class="fa fa-plus"></i>Tambah Wisatawan</a>

                </p>
            </div>
            <div class="box-body">
                {{-- start --}}

                <table class="table table-hover myTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tahun</th>
                            <th>Jumlah Wisatawan Lokal</th>
                            <th>Jumlah Wisatawan Internasional</th>
                            <th>Pendapatan</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $e=>$dt)
                        <tr>
                            <td>{{ $e+1 }}</td>
                            <td>{{ $dt->tahun}}</td>
                            <td>{{ number_format($dt->wst_lokal,0) }}</td>
                            <td>{{ number_format($dt->wst_intl,0) }}</td>
                            <td>Rp. {{ number_format($dt->pendapatan,0) }}</td>
                            <td>{{ date('d F Y',strtotime($dt->created_at)) }}</td>

                            <td>
                                <div style="width:60px">
                                    <a href="{{ url('master/pendapatan/'.$dt->pendapatan_id) }}" class="btn btn-warning btn-sm btn-edit" id="edit"><i class="fa fa-pencil-square-o"></i> Edit</a>
                                    <button href="{{ url('master/pendapatan/'.$dt->pendapatan_id) }}" class="btn btn-danger btn-sm btn-hapus" id="delete"><i class="fa fa-trash-o"></i> Delete</button>
                                </div>
                            </td>
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
