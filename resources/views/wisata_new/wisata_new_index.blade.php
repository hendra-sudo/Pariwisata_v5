@extends('layouts.master')

@section('content')

<ol class="breadcrumb">
    <li><a href="{{ url('master/wisata_new') }}"><i class="fa fa-ticket"></i> Wisata</a></li>
    {{-- <li><a href="#">Edit Events</a></li> --}}
    {{-- <li class="active">Morris</li> --}}
</ol>

<div class="row">
    <div class="col-md-12">
        <center>
            <h2>{{ $title }}</h2>
            <h5>Wisata Yang Ada Di Daerah Malang</h5>
        </center>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                    <a href="{{ url('master/wisata_new') }}" class="btn btn-sm btn-primary"><i class="fa fa-refresh"></i> Get All Data</a>
                    <a href="{{ url('master/wisata_new/add' )}}" class="btn btn-sm btn-success"><i class="fa fa-plus"></i>Tambah Wisata</a>
                    <a href="{{ url('master/wisata_new/nonaktif' )}}" class="btn btn-sm btn-info"><i class="fa fa-plus"></i>Wisata Non-Aktif</a>

                    {{-- button filter by wisata --}}
                    {{-- <div class="form-group">
                        <label for="pwd">Wisata :</label>
                        <select class="form-control select2" name="user">
                            <option value="all">All Wisata</option>
                            @foreach($data as $dt)
                            <option value="{{ $dt->wisata_id }}">{{ $dt->nama }}</option>
                            @endforeach
                        </select>
                      </div> --}}

                </p>
            </div>
            <div class="box-body">
            {{-- button filter by wisata --}}

            {{-- <form class="form-inline" method="get" action="{{ url('wisata_new/periode') }}">
                <div class="form-group">
                  <label for="email">Tanggal awal:</label>
                  <input type="text" name="tanggal_awal" class="form-control datepicker" id="email" autocomplete="off" value="{{ date('Y-m-d') }}">
                </div>
                <div class="form-group">
                  <label for="pwd">Tanggal akhir:</label>
                  <input type="text" name="tanggal_akhir" class="form-control datepicker" id="pwd" autocomplete="off" value="{{ date('Y-m-d') }}">
                </div>
                <div class="form-group">
                  <label for="pwd">Wisata:</label>
                  <select class="form-control select2" name="nama">
                    <option value="all">All Wisata</option>
                    @foreach($wisata as $dt)
                    <option value="{{ $dt->wisata_id }}">{{ $dt->nama }}</option>
                    @endforeach
                </select>
                </div>

                <button type="submit" class="btn btn-default">Submit</button>
              </form> --}}


                {{-- <form class="form-inline" action="{{ url('master/wisata_new') }}" method="get">
                    <div class="form-group">
                      <label for="email">Tanggal Awal :</label>
                      <input type="text" name="tanggal_awal" class="form-control datepicker" id="email" autocomplete="off" value="{{ date('Y-m-d') }}">
                    </div>
                    <div class="form-group">
                      <label for="pwd">Tanggal Akhir :</label>
                      <input type="text" name="tanggal_akhir" class="form-control datepicker" id="pwd" autocomplete="off" value="{{ date('Y-m-d') }}">
                    </div>

                    <button type="submit" class="btn btn-default">Submit</button>
                  </form> --}}

                {{-- start --}}

                <table class="table table-hover myTable">
                    <thead>
                        <tr>
                            <th>Action</th>
                            <th>#</th>
                            <th>Detail Wisata</th>
                            @if(\Auth::user()->status == "admin")
                            <th>Status</th>
                            @endif
                            @if(\Auth::user()->status == "vendor")
                            <th>Status</th>
                            @endif
                            <th>Verifikasi</th>

                            <th>Kategori</th>
                            {{-- <th>Nama Wisata</th> --}}
                            {{-- <th>Deskripsi</th> --}}
                            {{-- <th>Tag</th> --}}
                            {{-- <th>HTM lokal</th> --}}
                            <th>Nama Wisata</th>
                            <th>Status</th>
                            <th>Gambar</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $e=>$dt)
                        <tr>
                            <td>
                                <div style="width:80px">
                                    <a href="{{ url('master/wisata_new/'.$dt->wisata_id) }}" class="btn btn-warning btn-sm btn-edit" id="edit"><i class="fa fa-pencil-square-o"> </i>Edit</a>
                                    <button href="{{ url('master/wisata_new/'.$dt->wisata_id) }}" class="btn btn-danger btn-sm btn-hapus" id="delete"><i class="fa fa-trash-o"></i> Delete</button>

                                </div>
                            </td>
                            <td>{{ $e+1 }}</td>
                            <td>
                                <a href="{{ url('wisata/detail/'.$dt->wisata_id) }}" class="btn bg-aqua btn-sm" id="delete"><i class="fa fa-eye"> </i>Detail</a>
                            </td>
                            @if(\Auth::user()->status == "admin")
                            <td>@if($dt->status == 1)
                                <a href="{{ url('master/wisata_new/status/'.$dt->wisata_id) }}" class="btn btn-sm btn-danger">Non-Aktifkan</a>
                                @else
                                <a href="{{ url('master/wisata_new/status/'.$dt->wisata_id) }}" class="btn btn-sm btn-success">Aktifkan</a>
                                @endif
                            </td>
                            @endif
                            @if(\Auth::user()->status == "vendor")
                            <td>@if($dt->status == 1)
                                <a href="{{ url('master/wisata_new/status/'.$dt->wisata_id) }}" class="btn btn-sm btn-danger">Non-Aktifkan</a>
                                @else
                                <a href="{{ url('master/wisata_new/status/'.$dt->wisata_id) }}" class="btn btn-sm btn-success">Aktifkan</a>
                                @endif
                            </td>
                            @endif

                            <td>
                                <a href="{{ url('verifikasi/'.$dt->wisata_id) }}" class="btn btn-sm btn-primary">Verifikasi</a>
                            </td>

                            <td>
                                {{ $dt->kategori_w->kategori_nama }}
                            </td>
                            <td>{{ $dt->nama}}</td>
                            {{-- <td>Rp. {{ number_format($dt->htm_lokal,0) }}</td> --}}
                            {{-- <td>Rp. {{ number_format($dt->htm_intl,0) }}</td> --}}
                            <td><label class="label {{ ($dt->status == 1) ? 'label-success' : 'label-danger' }}">{{ ($dt->status == 1) ? 'Aktif' : 'Tidak Aktif' }}</td>
                            <td>
                                {{-- gambar --}}
                                <img src="{{ asset('gambar_wisata/'.$dt->gambar) }}" style="width: 50px;">
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
