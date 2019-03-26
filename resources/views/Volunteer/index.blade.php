@extends('layouts.master')
@section('content')
@if(session('sukses'))
<div class="alert alert-success" role="alert">
    {{session('sukses')}}
</div>
@endif
<!-- TABLE -->
<div class="col-md-12">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Daftar Volunteer</h3>

            <!-- Button trigger modal -->
            <div class="right">
                <button type="button" class="lnr lnr-plus-circle" data-toggle="modal" data-target="#exampleModal">
                    Tambah Data
                </button>
            </div>
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <td><b>Nama Depan</b></td>
                        <td><b>Nama Belakang</b></td>
                        <td><b>Jenis Kelamin</b></td>
                        <td><b>Nomor Telepon</b></td>
                        <td><b>Alamat</b></td>
                        <td><b>Action</b></td>
                    </tr>
                </thead>
                @foreach($data_volunteer as $volunteer)
                <tbody>
                    <tr>
                        <td>{{$volunteer -> nama_depan}}</td>
                        <td>{{$volunteer -> nama_belakang}}</td>
                        <td>{{$volunteer -> jenis_kelamin}}</td>
                        <td>{{$volunteer -> nomor_telepon}}</td>
                        <td>{{$volunteer -> alamat}}</td>
                        <td>
                            <a href="/volunteer/{{$volunteer->id}}/create" type="button" class="btn btn-warning">Edit</a>
                            <a href="#" type="button" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Volunteer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/volunteer/create" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Depan</label>
                        <input name="nama_depan" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Depan">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Belakang</label>
                        <input name="nama_depan" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Belakang">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                            <option value="Laki-laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nomor Telepon</label>
                        <input name="nomor_telepon" type="text" class="form-control" id="exampleFormControlInput1" placeholder="0823xxxxxx">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Alamat</label>
                        <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email</label>
                        <input name="email" type="text" class="form-control" id="exampleFormControlInput1" placeholder="email@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">NIK</label>
                        <input name="nik_pengguna" type="text" class="form-control" id="exampleFormControlInput1" placeholder="1404xxxxxx">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection 