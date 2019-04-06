@extends('admin.layouts.master')
@section('content')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Edit Data Volunteer</h3>
                        </div>
                        <div class="panel-body">
                            <form action="/volunteer/{{$volunteer->id}}/update" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="text">Nama Depan</label>
                                    <input name="nama_depan" value="{{$volunteer->nama_depan}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">
                                </div>
                                <div class="form-group">
                                    <label for="text">Nama Belakang</label>
                                    <input name="nama_belakang" value="{{$volunteer->nama_belakang}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama belakang">
                                </div>
                                <div class="form-group">
                                    <label for="Select">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                                        <option value="Laki-laki" @if($volunteer -> jenis_kelamin =="Laki-laki") selected @endif >Laki-laki</option>
                                        <option value="Perempuan" @if($volunteer -> jenis_kelamin =="Perempuan") selected @endif >Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="text">Nomor Telepon</label>
                                    <input name="nomor_telepon" value="{{$volunteer->nomor_telepon}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Alamat</label>
                                    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$volunteer->alamat}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="text">Email</label>
                                    <input name="email" value="{{$volunteer->email}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">
                                </div>
                                <div class="form-group">
                                    <label for="text">NIK</label>
                                    <input name="nik_pengguna" value="{{$volunteer->nik_pengguna}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">
                                </div>

                                <button type="submit" class="btn btn-warning">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection