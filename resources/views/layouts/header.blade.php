<!-- Logo -->
<?php
  $dt = \App\User::where('id',\Auth::user()->id)->first();
?>
<a href="../../index2.html" class="logo">
  <!-- mini logo for sidebar mini 50x50 pixels -->
  <span class="logo-mini"><b>A</b>LT</span>
  <!-- logo for regular state and mobile devices -->
  <span class="logo-lg"><b></b> Pariwisata Malang</span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top">
  <!-- Sidebar toggle button-->
  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </a>

  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <!-- Messages: style can be found in dropdown.less-->
      <!-- Tasks: style can be found in dropdown.less -->

      <!-- User Account: style can be found in dropdown.less -->



      {{-- <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning"></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Product Attention</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">

                </ul>
              </li>
              <li class="footer"><a href="{{ url('jadwal-reservasi') }}">View all</a></li>
            </ul>
          </li>


          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning"></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Product Attention</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                    <li class="user-footer">
                        <div class="pull-left">
                          <a href="{{ url('master/profile') }}" class="btn btn-default btn-flat menu-sidebar">Profile</a>
                        </div>
                        <div class="pull-right">
                        <a href="{{ url('keluar') }}" class="btn btn-default btn-flat menu-sidebar">Sign out</a>
                        </div>
                    </li>
                </ul>

          </li> --}}


      <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="glyphicon glyphicon-log-out"><b></b>{{ \Auth::user()->name }}</i>
          {{-- <img src="{{ ('logo.png') }}" class="user-image" alt="User Image"> --}}
          {{-- <span class="hidden-xs">{{\Auth::user()->name}}</span> --}}
        </a>
        <ul class="dropdown-menu">
          <!-- User image -->
          <li class="user-header">
            {{-- <img src="{{ ('logo.png') }}" class="img-circle" alt="User Image"> --}}

            <p>
              {{\Auth::user()->name}}
              <small>{{ \Auth::user()->name }}</small>
            </p>
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <div class="pull-left">
              <a href="{{ url('master/profile') }}" class="btn btn-default btn-flat menu-sidebar">Profile</a>
            </div>
            <div class="pull-right">
            <a href="{{ url('keluar') }}" class="btn btn-default btn-flat menu-sidebar">Sign out</a>
            </div>
          </li>
        </ul>
      </li>


      {{-- <li id="dropdown-user" class="dropdown">
        <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right" aria-expanded="false">
            <span class="ic-user pull-right">
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--You can use an image instead of an icon.-->
                <!--<img class="img-circle img-user media-object" src="https://irena2000.000webhostapp.com/assets/img/profile-photos/1.png" alt="Profile Picture">-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <i class="demo-pli-male"></i>
            </span>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--You can also display a user name in the navbar.-->
            <!--<div class="username hidden-xs">Aaron Chavez</div>-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        </a> --}}



    </li>


    </ul>
  </div>

</nav>
