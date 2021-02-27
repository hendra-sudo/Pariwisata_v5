@extends('layouts.master')

@section('content')

    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dasboard</a></li>
        {{-- <li><a href="#">Charts</a></li>
        <li class="active">Morris</li> --}}
    </ol>

{{-- Wisata --}}
<div class="row">
    <div class="box-body">
        <h2>Master Wisata</h2>
    </div>
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3>{{ $tot_event }}</h3>

          <p>Total Events</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="{{ url('master/event' ) }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3>{{ $tot_berita }}<sup style="font-size: 20px"></sup></h3>

          <p>Total Berita</p>
        </div>
        <div class="icon">
          <i class="fa fa-newspaper-o"></i>
        </div>
        <a href="{{ url('master/berita' ) }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>{{ $tot_kategori }}</h3>

          <p>Total Kategori Wisata</p>
        </div>
        <div class="icon">
          <i class="fa fa-line-chart"></i>
        </div>
        <a href="{{ url('master/kategori' ) }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3>{{$tot_wisata}}</h3>

          <p>Total Wisata</p>
        </div>
        <div class="icon">
          <i class="fa fa-location-arrow"></i>
        </div>
        <a href="{{ url('master/wisata' ) }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-purple">
          <div class="inner">
            <h3>{{ $tot_akomodasi }}</h3>
  
            <p>Total Akomodasi</p>
          </div>
          <div class="icon">
            <i class="ion fa-cab"></i>
          </div>
          <a href="{{ url('master/akomodasi' ) }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-orange">
          <div class="inner">
            <h3>{{ $tot_kuliner }}<sup style="font-size: 20px"></sup></h3>
  
            <p>Total Kuliner</p>
          </div>
          <div class="icon">
            <i class="fa fa-leaf"></i>
          </div>
          <a href="{{ url('master/kuliner' ) }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3>{{ $tot_wahana }}</h3>
  
            <p>Total Wahana</p>
          </div>
          <div class="icon">
            <i class="fa fa-bicycle"></i>
          </div>
          <a href="{{ url('master/wahana' ) }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-maroon">
          <div class="inner">
            <h3>{{$tot_cinderamata}}</h3>
  
            <p>Total Cinderamata</p>
          </div>
          <div class="icon">
            <i class="fa fa-tree"></i>
          </div>
          <a href="{{ url('master/cinderamata' ) }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
  </div>

  {{-- endWisata --}}

  {{-- Pendapatan --}}
@foreach ($dt as $dt)


  <div class="row">
    <div class="box-body">
        <h2>Master Pendapatan</h2>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-aqua"><i class="fa fa-calendar-minus-o"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Tahun</span>
          <span class="info-box-number">{{ $dt->tahun}}<small></small></span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-red"><i class="fa fa-map-pin"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Wisatawan Lokal</span>
          <span class="info-box-number">{{ number_format($dt->wst_lokal,0) }}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix visible-sm-block"></div>

    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-green"><i class="fa fa-map-o"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Wisatawan Internasional</span>
          <span class="info-box-number">{{ number_format($dt->wst_intl,0) }}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-yellow"><i class="fa fa-money"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Pendapatan</span>
          <span class="info-box-number">Rp. {{ number_format($dt->pendapatan,0) }}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
  </div>
  @endforeach
  {{-- endPendapatan --}}

{{-- start --}}

<div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box bg-aqua">
        <span class="info-box-icon"><i class="fa fa-bookmark-o"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Bookmarks</span>
          <span class="info-box-number">41,410</span>

          <div class="progress">
            <div class="progress-bar" style="width: 70%"></div>
          </div>
              <span class="progress-description">
                70% Increase in 30 Days
              </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box bg-green">
        <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Likes</span>
          <span class="info-box-number">41,410</span>

          <div class="progress">
            <div class="progress-bar" style="width: 70%"></div>
          </div>
              <span class="progress-description">
                70% Increase in 30 Days
              </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box bg-yellow">
        <span class="info-box-icon"><i class="fa fa-calendar"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Events</span>
          <span class="info-box-number">41,410</span>

          <div class="progress">
            <div class="progress-bar" style="width: 70%"></div>
          </div>
              <span class="progress-description">
                70% Increase in 30 Days
              </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box bg-red">
        <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Comments</span>
          <span class="info-box-number">41,410</span>

          <div class="progress">
            <div class="progress-bar" style="width: 70%"></div>
          </div>
              <span class="progress-description">
                70% Increase in 30 Days
              </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
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
