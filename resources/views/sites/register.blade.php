@extends('sites.layouts.master')
@section('content')

<!-- Custom fonts for this template-->
<link href="{{asset('admin/assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="{{asset('admin/assets/css/sb-admin-2.min.css')}}" rel="stylesheet">

<!-- ##### Catagory Area Start ##### -->
<div class="clever-catagory blog-details bg-img d-flex align-items-center justify-content-center p-3 height-400" style="background-image: url({{asset('/sites')}}/img/blog-img/7.jpg);">
    <div class="blog-details-headline">
        <h3>Register Runtah Web</h3>
        <div class="meta d-flex align-items-center justify-content-center">
            <a href="#">Iye13</a>
            <span><i class="fa fa-circle" aria-hidden="true"></i></span>
            <a href="#">Volunteer &amp; Non-Profit</a>
        </div>
    </div>
</div>
<!-- ##### Catagory Area End ##### -->

<div class="container">
    <div class="row justify-content-center">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-1">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Be a Volunteer!</h1>
                            </div>

                            {!! Form::open(['url' => '/postregister', 'class' => 'user']) !!}
                            <div class="form-group row">
                                <!--Nama-->
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    {!! Form::text('nama_depan','',['class' => 'form-control', 'placeholder' => 'Nama Depan']) !!}
                                </div>
                                <div class="col-sm-6">
                                    {!! Form::text('nama_belakang','',['class' => 'form-control ', 'placeholder' => 'Nama Belakang']) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                <!--jk-->
                                {!! Form::select('jenis_kelamin', ['' => 'Pilih Jenis Kelamin', 'Laki-laki' => 'Laki-laki', 'Perempuan' => 'Perempuan'],'Laki-laki'); !!}
                            </div>

                            <div class="form-group">
                                <!--no hp-->
                                {!! Form::text('nomor_telepon','',['class' => 'form-control', 'placeholder' => 'Nomor Telepon']) !!}
                            </div>

                            <div class="form-group">
                                <!--alamat-->
                                Alamat
                                {!! Form::textarea('alamat','',['class' => 'form-control', 'placeholder' => '']) !!}
                            </div>

                            <div class="form-group">
                                <!--nik-->
                                {!! Form::text('nik_pengguna','',['class' => 'form-control', 'placeholder' => 'NIK Pengguna']) !!}
                            </div>

                            <div class="form-group">
                                <!--email-->
                                {!! Form::email('email','',['class' => 'form-control', 'placeholder' => 'Alamat Email']) !!}
                            </div>

                            <div class="form-group row">
                                <!--password-->
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    {!! Form::password('password',['class' => 'form-control', 'placeholder' => 'Password']) !!}
                                </div>
                                <div class="col-sm-6">
                                    {!! Form::password('password',['class' => 'form-control', 'placeholder' => 'Ulangi Password']) !!}
                                </div>
                            </div>

                            <input type="submit" class="btn btn-primary btn-user btn-block" value="Daftar!">

                            {!! Form::close() !!}
                            <hr>
                            <a href="index.html" class="btn btn-google btn-user btn-block">
                                <i class="fab fa-google fa-fw"></i> Register with Google
                            </a>
                            <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                            </a>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="/login">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="{{asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('admin/assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('admin/assets/js/sb-admin-2.min.js')}}"></script>

@endsection