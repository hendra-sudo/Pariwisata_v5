@extends('layouts.master')

@section('content')

<div class="row">

    <div class="col-md-12">
        <p>
            <a href="javascript:history.back()" class="btn btn-warning btn-sm btn-flat">Kembali</a>
        </p>
        <div class="box box-warning">
            <div class="box header">
                {{-- <h4>{{ $title }}</h4> --}}
            </div>
            <div class="box-body">
                {{-- Template form --}}
                <form role="form" action="{{ url('master/fasilitas/add') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body">



                      <div class="form-group">
                        <label for="exampleInputEmail1">Kategori Wisata</label>
                            <select class="form-control select2" name="nama" id="">
                                <option selected="" disabled="" > Pilih Nama Wisata</option>
                                @foreach ($wisata as $wt)
                                    <option value="{{ $wt->wisata_id  }}">{{ $wt->nama }}</option>
                                @endforeach
                            </select>
                      </div>

                      {{-- start --}}
                      <table>
                        <thead>

                            {{-- @foreach ($fasilitas as $fw)
                                <label> <input type="checkbox" name="farwis_1[]" value="{{ $fw->faswis_id  }}">{{ $fw->faswis_nama }}</label>
                            @endforeach --}}

                            <tr>
                                <th>
                                    <label> <input type="checkbox" name="farwis_1[]" value=""> </label>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <label> <input type="checkbox" name="farwis_1[]" value="klinik_kesehatan"> KLINIK KESEHATAN</label>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                <label> <input type="checkbox" name="farwis_1[]" value="loker"> LOKER/PENITIPAN BARANG</label>
                            </th>
                            </tr>
                            <tr>
                                <th>
                                    <label> <input type="checkbox" name="farwis_1[]" value="penginapan"> PENGINAPAN</label>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <label> <input type="checkbox" name="farwis_1[]" value="souvenir"> SOUVENIR SHOP</label>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <label> <input type="checkbox" name="farwis_1[]" value="tempat_ibadah"> TEMPAT IBADAH</label>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <label> <input type="checkbox" name="farwis_1[]" value="tempat_makan"> TEMPAT MAKAN</label>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <label> <input type="checkbox" name="farwis_1[]" value="toilet"> TOILET</label>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <label> <input type="checkbox" name="farwis_1[]" value="tour_guide"> TOUR GUIDE</label>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <label> <input type="checkbox" name="farwis_1[]" value="tourist"> TOURIST INFORMATION</label>
                                </th>
                            </tr>

                        </thead>
                    </table>


                      </div>

                      {{-- End --}}


                    <!-- /.box-body -->

                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>



            </div>
        </div>
    </div>
</div>

@endsection