@extends('layouts.master')

@section('content')

<ol class="breadcrumb">
    <li><a href="{{ url('master/akomodasi') }}"><i class="fa fa-cab"></i> Akomodasi </a></li>
    <li><a href="#">Tambah Akomodasi</a></li>
    {{-- <li class="active">Morris</li> --}}
</ol>

<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <a href="{{ url('master/akomodasi')}}" class="btn bg-aqua btn-sm" ><i class="fa fa-backward"></i> Back</a>
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

                <form role="form" action="{{ url('master/akomodasi/add') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}

                      <div class="form-group">
                        <label for="exampleInputEmail1">Kategori Wisata</label>
                            <select class="form-control select2" name="wisata" id="">
                                <option selected="" disabled="" > Pilih Wisata</option>
                                @foreach ($wisata as $kt)
                                    <option value="{{ $kt->wisata_id }}">{{ $kt->nama }}</option>
                                @endforeach
                            </select>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Nama akomodasi</label>
                        <input type="text" name="nama_akomodasi"  class="form-control" id="exampleInputEmail1" placeholder="Nama akomodasi" required>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Deskripsi</label>
                        <textarea class="form-control summernote" name="deskripsi" required></textarea>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Harga Akomodasi</label>
                        <input type="number" name="harga"  class="form-control" id="exampleInputEmail1" placeholder="Rp 10.000,-" required>
                      </div>

                        {{-- <div class="form-group">
                            <label for="exampleInputFile">File Gambar</label>
                            <input type="file" name="gambar" id="exampleInputFile">
                        </div> --}}
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
