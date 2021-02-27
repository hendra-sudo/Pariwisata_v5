<section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('icon.png') }}" class="img-circle" >
        </div>
        <div class="pull-left info">
          <p>{{ \Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        {{-- start --}}
        <li class="header">BERANDA</li>
        <li class="menu-sidebar {{ (Request::path() == 'admin') ? 'active' : '' }}"><a href="{{ url('/') }}"><i class="fa fa-fw fa-home"></i> Home</span></a></li>
{{-- Admin --}}
        @if(\Auth::user()->status == "admin")
        <li class="menu-sidebar {{ (Request::path() == 'master/dasboard') ? 'active' : '' }}"><a href="{{ url('/master/dasboard') }}"><i class="fa fa-fw fa-dashboard"></i> Dasboard</span></a></li>
        <li class="menu-sidebar {{ (Request::path() == 'master/profile') ? 'active' : '' }}"><a href="{{ url('/master/profile') }}"><i class="fa fa-fw fa-user"></i> Manage Profile</span></a></li>
        @endif
{{-- Vendor --}}
        @if(\Auth::user()->status == "vendor")
        <li class="menu-sidebar {{ (Request::path() == 'master/dasboard') ? 'active' : '' }}"><a href="{{ url('/master/dasboard') }}"><i class="fa fa-fw fa-dashboard"></i> Dasboard</span></a></li>
        {{-- <li class="menu-sidebar {{ (Request::path() == 'master/profile') ? 'active' : '' }}"><a href="{{ url('/master/profile') }}"><i class="fa fa-fw fa-user"></i> Manage Profile</span></a></li> --}}
        @endif
        {{-- <li class="header">MASTER Wisata</li> --}}
        {{-- <li><a href="{{ url('master/kategori') }}"><i class="fa fa-fw fa-tag"></i>Berita</a></li> --}}

        <li class="header">MASTER DATA</li>

        {{-- Sidebar --}}
        @if(\Auth::user()->status == "admin")
        <li class="menu-sidebar {{ (Request::path() == 'master/berita') ? 'active' : '' }}"><a href="{{ url('/master/berita') }}"><i class="fa  fa-calendar  fa-calendar"></i> Berita</span></a></li>
        <li class="menu-sidebar {{ (Request::path() == 'master/event') ? 'active' : '' }}"><a href="{{ url('/master/event') }}"><i class="fa fa-bookmark-o fa-bookmark-o"></i> Event</span></a></li>
        @endif

        @if(\Auth::user()->status == "vendor")
        <li class="menu-sidebar {{ (Request::path() == 'master/berita') ? 'active' : '' }}"><a href="{{ url('/master/berita') }}"><i class="fa  fa-calendar  fa-calendar"></i> Berita</span></a></li>
        <li class="menu-sidebar {{ (Request::path() == 'master/event') ? 'active' : '' }}"><a href="{{ url('/master/event') }}"><i class="fa fa-bookmark-o fa-bookmark-o"></i> Event</span></a></li>
        @endif
        <li class="treeview {{ (Request::segment(1) == 'master') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-fw fa-bullhorn"></i> <span>Master WISATA</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

          <ul class="treeview-menu">
{{-- Admin --}}
            @if(\Auth::user()->status == "admin")
            <li class="{{ (Request::path() == 'verifikasi') ? 'active' : '' }} menu-sidebar"><a href="{{ url('verifikasi') }}"><i class="fa fa-fw fa-pencil-square-o "></i> Verifikasi Wisata</a></li>
            <li class="{{ (Request::path() == 'master/kategori') ? 'active' : '' }} menu-sidebar"><a href="{{ url('master/kategori') }}"><i class="fa fa-fw fa-reorder "></i> Kategori</a></li>
            @endif
            {{-- vendor --}}
            @if(\Auth::user()->status == "vendor")
            <li class="{{ (Request::path() == 'verifikasi') ? 'active' : '' }} menu-sidebar"><a href="{{ url('verifikasi') }}"><i class="fa fa-fw fa-pencil-square-o "></i> Verifikasi Wisata</a></li>
            <li class="{{ (Request::path() == 'master/kategori') ? 'active' : '' }} menu-sidebar"><a href="{{ url('master/kategori') }}"><i class="fa fa-fw fa-reorder "></i> Kategori</a></li>
            @endif

            {{-- <li class="{{ (Request::path() == 'master/kategori') ? 'active' : '' }} menu-sidebar"><a href="{{ url('master/kategori') }}"><i class="fa fa-fw fa-reorder "></i> Kategori</a></li> --}}

            {{-- <li class="{{ (Request::path() == 'master/wisata') ? 'active' : '' }} menu-sidebar"><a href="{{ url('master/wisata') }}"><i class="fa fa-fw fa-ticket"></i> Wisata</a></li> --}}

            <li class="{{ (Request::path() == 'master/wisata_new') ? 'active' : '' }} menu-sidebar"><a href="{{ url('master/wisata_new') }}"><i class="fa fa-fw fa-ticket"></i> Wisata New</a></li>

            <li class="{{ (Request::path() == 'master/cinderamata') ? 'active' : '' }} menu-sidebar"><a href="{{ url('master/cinderamata') }}"><i class="fa fa-tree  fa-tree"></i> Cinderamata</a></li>

            <li class="{{ (Request::path() == 'master/akomodasi') ? 'active' : '' }} menu-sidebar"><a href="{{ url('master/akomodasi') }}"><i class="fa fa-cab  fa-cab"></i> Akomodasi Wisata</a></li>

            <li class="{{ (Request::path() == 'master/kuliner') ? 'active' : '' }} menu-sidebar"><a href="{{ url('master/kuliner') }}"><i class="fa fa-leaf  fa-leaf"></i> Kuliner</a></li>

            <li class="{{ (Request::path() == 'master/wahana') ? 'active' : '' }} menu-sidebar"><a href="{{ url('master/wahana') }}"><i class="fa fa-bicycle  fa-bicycle"></i> Wahana</a></li>

            {{-- <li class="{{ (Request::path() == 'master/wahana') ? 'active' : '' }} menu-sidebar"><a href="{{ url('master/fasilitas') }}"><i class="fa fa-bed  fa-bed"></i> Fasilitas</a></li> --}}

          </ul>
        </li>

        {{-- Sidebar --}}
        @if(\Auth::user()->status == "admin")
        <li class="menu-sidebar {{ (Request::path() == 'master/pendapatan') ? 'active' : '' }}"><a href="{{ url('/master/pendapatan') }}"><i class="fa fa-money fa-money"></i> Pendapatan</span></a></li>
        {{-- @endif --}}
        <li class="menu-sidebar {{ (Request::path() == 'master/wisatawan') ? 'active' : '' }}"><a href="{{ url('/master/wisatawan') }}"><i class="fa  fa-map-o  fa-map-o"></i> Wisatawan</span></a></li>
        {{-- @if(\Auth::user()->status == 1 && 2) --}}
        <li class="menu-sidebar {{ (Request::path() == 'master/about') ? 'active' : '' }}"><a href="{{ url('/master/about') }}"><i class="fa fa-book fa-book"></i> About</span></a></li>
        <li class="menu-sidebar {{ (Request::path() == 'master/kontak') ? 'active' : '' }}"><a href="{{ url('/master/kontak') }}"><i class="fa fa-key fa-key"></i> Kontak</span></a></li>
        @endif
        {{-- EndSidebar --}}
        <li class="header">OTHER</li>

        <li class="menu-sidebar"><a href="{{ url('/keluar') }}"><span class="glyphicon glyphicon-log-out"></span> Logout</span></a></li>


        {{-- end --}}

      </ul>
    </section>
