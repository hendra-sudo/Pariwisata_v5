<div class="row">
    <center>
        <div class="col-md-12">
            <div class="section-title">
                <h2>Seputar Events</h2>
            </div>
        </div>
    </center>

    {{-- Start --}}
     <?php
    //  $wisata = \DB::table('m_wisata as a')->join('m_kategori as k','k.kategori_id','=','a.kategori')->select('a.nama','a.deskripsi','a.gambar','a.created_at','k.kategori_nama as kategori','a.wisata_id')->orderby('created_at','desc')->get();
     $event = \DB::table('m_event')->orderby('created_at','asc')->get();
     ?>
     {{-- end Start --}}

    <!-- post -->
    @foreach($event as $dt)
    <div class="col-md-4">
        <div class="post">
            <a class="post-img" href="{{ url('event_detail/'.$dt->event_id) }}"><img src="{{ asset('uploads_event/'.$dt->event_gambar) }}" style="width: 300px;" alt=""></a>
            <div class="post-body">
                <div class="post-meta">
                    <a class="post-category cat-1" href="{{ url('event_detail/'.$dt->event_id) }}">{{ $dt->event_penyelenggara}}</a>
                    <span class="post-date">{{ date('d F Y',strtotime($dt->event_tgl)) }}</span>
                </div>
                <h3 class="post-title"><a href="{{ url('event_detail/'.$dt->event_id) }}">{{ $dt->event_judul}}</a></h3>
            </div>
        </div>
    </div>
    @endforeach
    <!-- /post -->


    <div class="clearfix visible-md visible-lg"></div>
    <div class="col-md-12">
        <div class="section-title">
            <h2>Berita Malang</h2>
        </div>
    </div>
    <?php
        $kategoris = \DB::table('m_berita')->orderBy('berita_id','asc')->get();
    ?>
    <!-- post -->
    @foreach($kategoris as $dt)
    <div class="col-md-4">
        <div class="post">
            <a class="post-img" href="{{ url('berita_detail/'.$dt->berita_id) }}"><img src="{{ asset('berita_gambar/'.$dt->berita_gambar) }}" style="width: 300px;" alt=""></a>
            <div class="post-body">
                <div class="post-meta">
                    <a class="post-category cat-2" href="{{ url('berita_detail/'.$dt->berita_id) }}">{{ $dt->berita_autor}}</a>
                    <span class="post-date">{{ date('d F Y',strtotime($dt->created_at)) }}</span>
                </div>
                <h3 class="post-title"><a href="{{ url('berita_detail/'.$dt->berita_id) }}">{{ $dt->berita_judul}}</a></h3>
            </div>
        </div>
    </div>
    @endforeach
    <!-- /post -->
</div>
