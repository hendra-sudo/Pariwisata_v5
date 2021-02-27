@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                </p>
            </div>
            <div class="box-body">

                {{-- start --}}
                <form role="form" action="{{ url('master/wisata/'.$dt->wisata_id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="box-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Wisata URL</label>
                        <input type="text" value="{{ $dt->url_video }}" name="url" class="form-control" id="exampleInputEmail1" placeholder="Wisata URL">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Kategori Wisata</label>
                            <select class="form-control select2" name="kategori" id="">
                                <option selected="" disabled="" > Pilih kategori</option>
                                @foreach ($kategori as $kt)
                                    <option value="{{ $kt->kategori_id }}" {{ ($dt->kategori == $kt->kategori_id) ? 'selected' : '' }}>{{ $kt->kategori_nama }}</option>
                                @endforeach

                            </select>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Nama Wisata</label>
                        <input type="text" value="{{ $dt->nama }}" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama Wisata">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Deskripsi</label>
                        <textarea class="form-control summernote" value="" name="deskripsi" >{{ $dt->deskripsi }}</textarea>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Wisata Tag</label>
                        <input type="text" value="{{ $dt->wisata_tag }}" name="wisata_tag" class="form-control" id="exampleInputEmail1" placeholder="Wisata Tag">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">HTM Lokal</label>
                        <input type="number" value="{{ $dt->htm_lokal }}" name="htm_lokal" class="form-control" id="exampleInputEmail1" placeholder="Rp 10.000,-">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">HTM Internasional</label>
                        <input type="number" value="{{ $dt->htm_intl }}" name="htm_intl" class="form-control" id="exampleInputEmail1" placeholder="Rp 25.000,-">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Latitude GPS</label>
                        <input type="text" value="{{ $dt->latitude }}" name="latitude" class="form-control" id="exampleInputEmail1" placeholder="-7° 58' 46.92 S">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Longitude GPS</label>
                        <input type="text" value="{{ $dt->longitude }}" name="longitude" class="form-control" id="exampleInputEmail1" placeholder="112° 37' 49.44 E">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputFile">File Gambar</label>
                          <input type="file" name="image" id="exampleInputFile">
                      </div>
                    <!-- /.box-body -->

                    <div class="box-footer">

                      <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                  </form>

                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="box-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Wisata URL</label>
                        <input type="text" name="url_video"  value="{{ $dt->url_video }}" class="form-control" id="exampleInputEmail1" placeholder="Wisata URL">
                      </div>

                      {{-- <div class="form-group">
                        <label for="exampleInputEmail1">Kategori Wisata</label>
                        <select class="form-control select2" name="kategori">
                            <option selected="" disabled="" > Pilih kategori</option>
                            @foreach($kategori as $kt)
                                <option value="{{ $kt->kategori_id }}" {{ ($dt->kategori_nama == $kt->kategori_id) ? 'selected' : '' }} >{{ $sp->kategori_nama }}</option>
                            @endforeach
                        </select>
                      </div> --}}

                      <div class="form-group">
                        <label for="exampleInputEmail1">Kategori Wisata</label>
                            <select class="form-control select2" name="kategori" >
                                <option selected="" disabled="" > Pilih kategori</option>
                                @foreach ($kategori as $kt)
                                    <option value="{{ $kt->kategori_id }}" {{ ($dt->kategori == $kt->kategori_id) ? 'selected' : '' }}>{{ $kt->kategori_nama }}</option>
                                @endforeach

                            </select>
                      </div>


                      <div class="form-group">
                        <label for="exampleInputEmail1">Nama Wisata</label>
                        <input type="text" name="nama" value="{{ $dt->nama }}" class="form-control" id="exampleInputEmail1" placeholder="Nama Wisata">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Deskripsi</label>
                        <textarea class="form-control summernote" name="deskripsi" >{{ $dt->deskripsi }}</textarea>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Wisata Tag</label>
                        <input type="text" name="wisata_tag" value="{{ $dt->wisata_tag }}" class="form-control" id="exampleInputEmail1" placeholder="Wisata Tag">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">HTM Lokal</label>
                        <input type="number" name="htm_lokal" value="{{ $dt->htm_lokal }}" class="form-control" id="exampleInputEmail1" placeholder="Rp 10.000,-">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">HTM Internasional</label>
                        <input type="number" name="htm_intl" value="{{ $dt->htm_intl }}" class="form-control" id="exampleInputEmail1" placeholder="Rp 25.000,-">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Latitude GPS</label>
                        <input type="text" name="latitude" value="{{ $dt->latitude }}" class="form-control" id="exampleInputEmail1" placeholder="-7° 58' 46.92 S">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Longitude GPS</label>
                        <input type="text" name="longitude" value="{{ $dt->longitude }}" class="form-control" id="exampleInputEmail1" placeholder="112° 37' 49.44 E">
                      </div>
                      <div class="form-group">
                            <label for="exampleInputFile">File Gambar</label>
                            <input type="file" name="gambar" id="exampleInputFile">
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
