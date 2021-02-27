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
                                @foreach ($fasilitas as $fasilitas_wisata)
                                    <option value="{{ $fasilitas_wisata->id  }}">{{ $fasilitas_wisata->faswis_nama }}</option>
                                    {{-- <option value="{{ $wt->wisata_id  }}">{{ $wt->nama }}</option> --}}
                                @endforeach
                            </select>
                      </div>

                      {{-- start --}}
                      <table>
                        <thead>

                            @foreach ($fasilitas as $buah)
                            <tr>
                                <td>
                                    <label> <input type="checkbox" name="farwis_1[]" value="{{ $buah->id }}">{{ $buah->faswis_nama }}</label>
                                </td>
                            </tr>
                            @endforeach
                            {{-- @foreach ($list_fasilitas as $dt)
                                <label> <input type="checkbox" name="farwis_1[]" value="{{ $dt->faswis_id  }}">{{ $dt->faswis_nama }}</label>
                            @endforeach --}}

{{--
                            <tr>
                                <th>
                                    <label> <input type="checkbox" name="farwis_1[]" value="KLINIK KESEHATAN"> KLINIK KESEHATAN</label>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                <label> <input type="checkbox" name="farwis_1[]" value="LOKER/PENITIPAN BARANG"> LOKER/PENITIPAN BARANG</label>
                            </th>
                            </tr>
                            <tr>
                                <th>
                                    <label> <input type="checkbox" name="farwis_1[]" value="PENGINAPAN"> PENGINAPAN</label>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <label> <input type="checkbox" name="farwis_1[]" value="SOUVENIR SHOP"> SOUVENIR SHOP</label>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <label> <input type="checkbox" name="farwis_1[]" value="TEMPAT IBADAH"> TEMPAT IBADAH</label>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <label> <input type="checkbox" name="farwis_1[]" value="TEMPAT MAKAN"> TEMPAT MAKAN</label>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <label> <input type="checkbox" name="farwis_1[]" value="TOILET"> TOILET</label>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <label> <input type="checkbox" name="farwis_1[]" value="TOUR GUIDE"> TOUR GUIDE</label>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <label> <input type="checkbox" name="farwis_1[]" value="TOURIST INFORMATION"> TOURIST INFORMATION</label>
                                </th>
                            </tr> --}}

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
