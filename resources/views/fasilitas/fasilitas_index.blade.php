@extends('layouts.master')

@section('content')

@php
    $data_buah = $wisata->keyBy('id')->toArray();
@endphp

<div class="row">
    <div class="col-md-12">
        <p>
            <button class="btn btn-flat btn-sm btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
            <a href="{{ url('master/fasilitas/add' )}}" class="btn btn-flat btn-sm btn-success"><i class="fa fa-plus"></i>Tambah Fasilitas Wisata</a>

        </p>

        <div class="box box-warning">
            <div class="box-header">
                <h4>{{ $title }}</h4>
            </div>
            <div class="box-body">
                <table class="table table-hover myTable">
                    <thead>
                        <tr>
                        <th>#</th>
                        <th>Nama Wisata</th>
                        {{-- <th>Deskripsi</th> --}}
                        <th>Fasilitas</th>
                        <th>Ket</th>


                         <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $e=>$hasil)
                        <tr>
                            <td>{{ $e+1 }}</td>
                            <td>
                                {{ $hasil->wisata}}
                            </td>
                            <td>{{ $hasil->farwis_1}}</td>
                            <td>
                                @php
                                        $hasil_split = explode(',', $hasil->farwis_1);
                                @endphp
                                @foreach ($hasil_split as $h)
                                        <div>{{ ($data_buah[$h]->faswis_nama) }}</div>
                                @endforeach
                                {{-- @php
                                        $hasil_split = explode(',', $hasil->farwis_1);
                                @endphp
                                @foreach ($hasil_split as $h)
                                        <div>{{ $data_buah[$h] }}</div>
                                @endforeach --}}
                            </td>
                            

                            <td>
                                <div style="width:60px">
                                    {{-- <a href="{{ url('master/fasilitas/'.$dt->id) }}" class="btn btn-warning btn-xs btn-edit" id="edit"><i class="fa fa-pencil-square-o"></i></a> --}}
                                    {{-- <button href="{{ url('master/fasilitas/'.$data->id) }}" class="btn btn-danger btn-xs btn-hapus" id="delete"><i class="fa fa-trash-o"></i></button> --}}
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-hapus" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-default modal-dialog-centered modal-" role="document">
      <div class="modal-content bg-gradient-danger">

        <div class="modal-header">
          <h6 class="modal-title" id="modal-title-notification">Your attention is required</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">??</span>
          </button>
        </div>

        <div class="modal-body">

          <div class="py-3 text-center">
            <i class="ni ni-bell-55 ni-3x"></i>
            <h4 class="heading mt-4">Apakah kamu yakin ingin menghapus data ini?</h4>
          </div>

        </div>

        <div class="modal-footer">
          <form action="" method="post">
            {{ csrf_field() }}
            {{ method_field('delete') }}
            <p>
            <button type="submit" class="btn btn-danger btn-flat btn-sm menu-sidebar">Ok, Hapus</button>
              <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
            </p>
          </form>
        </div>

      </div>
    </div>
  </div>


@endsection

@section('scripts')

<script type="text/javascript">
    $(document).ready(function(){

        $('.btn-refresh').click(function(e){
            e.preventDefault();
            location.reload();
        })

        // btn hapus di klik
        $('body').on('click','.btn-hapus',function(e){
            e.preventDefault();
            var url = $(this).attr('href');
            $('#modal-hapus').find('form').attr('action',url);
            $('#modal-hapus').modal();
        });

    })
</script>

@endsection
