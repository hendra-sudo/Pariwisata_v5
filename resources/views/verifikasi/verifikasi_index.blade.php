@extends('layouts.master')

@section('content')

<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-pencil-square-o"></i> Verifikasi Wisata</a></li>
    {{-- <li><a href="#">Edit Events</a></li> --}}
    {{-- <li class="active">Morris</li> --}}
</ol>

<div class="row">
    <div class="col-md-12">
        <center>
            <h2>{{ $title }}</h2>
            <h5>Halaman Verikasi Untuk Sebuah Wisata</h5>
        </center>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                </p>
            </div>
            <div class="box-body">
               <table class="table table-hover">
                   <thead>
                       <tr>
                           <th>#</th>
                           <th>user</th>
                           <th>Nama Wisata</th>
                           <th>Harag</th>
                           <th>created_at</th>
                           <th>Status Wisata</th>
                           @if(\Auth::user()->status == "admin")
                           <th>Aksi</th>
                           @endif
                           @if(\Auth::user()->status == "vendor")
                           <th>Aksi</th>
                           @endif

                       </tr>
                   </thead>
                   <tbody>
                       @foreach($data as $e=>$dt)
                       <tr>
                           <td>{{ $e+1 }}</td>
                           <td>{{ $dt->user_r->name }}</td>
                           <td>{{ $dt->wisata_r->nama }}</td>
                           <td>Rp. {{ number_format($dt->wisata_r->htm_intl,0) }}</td>
                           <td>{{ date('d F Y',strtotime($dt->created_at)) }}</td>


                           @if($dt->status == null)
                                <td><label class="label label-warning">Menunggu Diverifikasi</label></td>
                           @elseif($dt->status == 1)
                                <td><label class="label label-success">Disetujui</label></td>
                            @elseif($dt->status == 2)
                                <td><label class="label label-danger">Ditolak</label></td>
                            @endif

                        @if(\Auth::user()->status == "admin")
                            @if($dt->status == null)
                                <td>
                                <a href="{{ url('pinjam-buku/setujui/'.$dt->id) }}" class="btn btn-sm btn-primary "><i class="fa fa-check"></i> Setujui</a>
                                <a href="{{ url('pinjam-buku/tolak/'.$dt->id) }}" class="btn btn-sm btn-danger "><i class="fa fa-close"></i> Tolak</a>
                                </td>
                            @elseif($dt->status == 1)
                                <td>
                                <a href="{{ url('pinjam-buku/tolak/'.$dt->id) }}" class="btn btn-sm btn-danger "><i class="fa fa-close"></i> Tolak</a>
                                </td>
                            @elseif($dt->status == 2)
                                <td>
                                <a href="{{ url('pinjam-buku/setujui/'.$dt->id) }}" class="btn btn-sm btn-primary "><i class="fa fa-check"></i> Setujui</a>
                                </td>
                            @endif
                        @endif
                        @if(\Auth::user()->status == "vendor")
                            @if($dt->status == null)
                                <td>
                                <a href="{{ url('pinjam-buku/setujui/'.$dt->id) }}" class="btn btn-sm btn-primary "><i class="fa fa-check"></i> Setujui</a>
                                <a href="{{ url('pinjam-buku/tolak/'.$dt->id) }}" class="btn btn-sm btn-danger "><i class="fa fa-close"></i> Tolak</a>
                                </td>
                            @elseif($dt->status == 1)
                                <td>
                                <a href="{{ url('pinjam-buku/tolak/'.$dt->id) }}" class="btn btn-sm btn-danger "><i class="fa fa-close"></i> Tolak</a>
                                </td>
                            @elseif($dt->status == 2)
                                <td>
                                <a href="{{ url('pinjam-buku/setujui/'.$dt->id) }}" class="btn btn-sm btn-primary "><i class="fa fa-check"></i> Setujui</a>
                                </td>
                            @endif
                        @endif


                       </tr>
                       @endforeach
                   </tbody>
               </table>
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
