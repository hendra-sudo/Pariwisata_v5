@extends('layouts.master')

@section('content')

<ol class="breadcrumb">
    <li><a href="{{ url('master/profile')}}"><i class="fa fa-user"></i> Manage Profile</a></li>
    <li><a href="#">Tambah Users</a></li>
    {{-- <li class="active">Morris</li> --}}
</ol>


<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <a href="{{ url('master/profile')}}" class="btn bg-aqua btn-sm" ><i class="fa fa-backward"></i> Back</a>
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




                <form role="form" action="{{ url('master/profile/add') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    {{-- <div class="form-group">
                        <label for="exampleInputEmail1">Pilih Kecamatan</label>
                            <select class="form-control select2" name="wisata" id="">
                                <option selected="" disabled="" > Pilih Kecamatan</option>

                                    <option value="Pakusari">Pakusari</option>
                                    <option value="Arjasa">Arjasa</option>
                                    <option value="Kebonsari">Kebonsari</option>

                            </select>
                      </div> --}}

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap"  class="form-control" id="exampleInputEmail1" placeholder="Nama Pengguna" required>
                    </div>


                    <div class="form-group">
                        <label for="exampleInputEmail1">Kecamatan</label>
                            <select class="form-control select2" name="nama_kecamatan" id="">
                                <option selected="" disabled="" > Pilih Kecamatan</option>
                                @foreach ($alamat as $dt)
                                    <option value="{{ $dt->id  }}">{{ $dt->nama_kecamatan }}</option>
                                    {{-- <option value="{{ $wt->wisata_id  }}">{{ $wt->nama }}</option> --}}
                                @endforeach
                            </select>
                      </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kelurahan</label>
                            <select class="form-control select2" name="nama_desa" id="">
                                <option selected="" disabled="" > Pilih Kelurahan</option>
                                @foreach ($alamat as $dt)
                                    <option value="{{ $dt->id  }}">{{ $dt->nama_desa }}</option>
                                    {{-- <option value="{{ $wt->wisata_id  }}">{{ $wt->nama }}</option> --}}
                                @endforeach
                            </select>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Alamat</label>
                        <input type="text" name="alamat"  class="form-control" id="exampleInputEmail1" placeholder="Alamat Pengguna" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nomor Handphone</label>
                        <input type="number" name="no_hp"  class="form-control" id="exampleInputEmail1" placeholder="Nomor Pengguna" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" name="name"  class="form-control" id="exampleInputEmail1" placeholder="Username" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email"  class="form-control" id="exampleInputEmail1" placeholder="user@gmail.com" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" name="password"  class="form-control" id="exampleInputEmail1" placeholder="" required>
                    </div>
                    {{-- <div class="form-group">
                        <label for="exampleInputEmail1">Password  Default : rahasia2021</label>
                        {{-- <input type="text" name="email"  class="form-control" id="exampleInputEmail1" placeholder="user@gmail.com"> --}}
                    </div> 
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


{{-- <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="{{asset('index.html')}}" method="post">

        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Full name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div>

      <a href="login.html" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div> --}}
