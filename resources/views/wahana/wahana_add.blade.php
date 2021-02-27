@extends('layouts.master')

@section('content')

<ol class="breadcrumb">
    <li><a href="{{ url('master/wahana') }}"><i class="fa fa-bicycle"></i> Wahana </a></li>
    <li><a href="#">Tambah Wahana</a></li>
    {{-- <li class="active">Morris</li> --}}
</ol>

<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <a href="{{ url('master/wahana')}}" class="btn bg-aqua btn-sm" ><i class="fa fa-backward"></i> Back</a>
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

                <form role="form" action="{{ url('master/wahana/add') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}


                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Wisata</label>
                                <select class="form-control select2" name="wisata" id="">
                                    <option selected="" disabled="" > Pilih Wisata</option>
                                    @foreach ($wisata as $kt)
                                        <option value="{{ $kt->wisata_id }}">{{ $kt->nama }}</option>
                                    @endforeach
                                </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Wahana</label>
                            <input type="text" name="nama_wahana[]"  value="{{ old('nama_wahana') }}" class="form-control" id="exampleInputEmail1" placeholder="Nama Wahana" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Harga Wisata</label>
                            <input type="text" name="harga_wahana[]" value="{{ old('harga_wahana') }}" class="form-control" id="exampleInputEmail1" placeholder="Rp 10.000,-" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Deskripsi</label>
                            <input type="text" name="deskripsi[]"  value="{{ old('nama_wahana') }}" class="form-control" id="exampleInputEmail1" placeholder="Deskripsikan" required>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <a href="#" class="addcustomer btn btn-primary" style="float: right">Tambah Wahana</a>
                            </div>
                        </div>

                        <div class="customer"></div>

                        <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js'></script>
                        <script type="text/javascript">
                            $('.addcustomer').on('click',function(){
                                addcustomer();
                            });
                            function addcustomer(){
                                var customer = '<div><div class="form-group"><label for="exampleInputEmail1">Nama Wahana</label><input type="text" name="nama_wahana[]"  value="{{ old('nama_wahana') }}" class="form-control" id="exampleInputEmail1" placeholder="Nama Wahana" required></div><div class="form-group"><label for="exampleInputEmail1">Harga Wisata</label><input type="text" name="harga_wahana[]" value="{{ old('harga_wahana') }}" class="form-control" id="exampleInputEmail1" placeholder="Rp 10.000,-" required></div><div class="form-group"><label for="exampleInputEmail1">Deskripsi</label><input type="text" name="deskripsi[]"  value="{{ old('nama_wahana') }}" class="form-control" id="exampleInputEmail1" placeholder="Deskripsikan" required></div><div class="form-group row"><label class="col-sm-2 col-form-label"></label><div class="col-sm-10"><a href="#" class="remove btn btn-danger" style="float: right">Hapus</a></div></div></div>';
                                $('.customer').append(customer);
                            };
                            $('.remove').live('click', function(){
                                $(this).parent().parent().parent().remove();
                            });
                        </script>

                    <!-- /.box-body -->

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




                        {{-- <div class="form-group">
                            <label for="exampleInputEmail1">Deskripsi</label>
                            <textarea class="form-control summernote" name="deskripsi[]" value="{{ old('deskripsi') }}" ></textarea>
                        </div> --}}

                        {{-- <div class="form-group">
                            <label for="exampleInputFile">File Gambar</label>
                            <input type="file" name="gambar" value="{{ old('gambar') }}" id="exampleInputFile">
                        </div> --}}



