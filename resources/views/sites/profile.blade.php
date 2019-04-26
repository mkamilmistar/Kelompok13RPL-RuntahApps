@extends('sites.layouts.master')
@section('content')
<h1>INI PROFILE</h1>
<div class="col-sm-12">
    <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
        <thead>
            <tr>
                <td><b>Nama Depan</b></td>
                <td><b>Nama Belakang</b></td>
                <td><b>Jenis Kelamin</b></td>
                <td><b>Nomor Telepon</b></td>
                <td><b>Alamat</b></td>
                <td><b>NIK Pengguna</b></td>
                <td><b>Poin</b></td>
                <td><b>Action</b></td>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>{{$volunteer -> nama_depan}}</td>
                <td>{{$volunteer -> nama_belakang}}</td>
                <td>{{$volunteer -> jenis_kelamin}}</td>
                <td>{{$volunteer -> nomor_telepon}}</td>
                <td>{{$volunteer -> alamat}}</td>
                <td>{{$volunteer -> nik_pengguna}}</td>
                <td>{{$volunteer -> poin}}</td>
                <td>
                    <a href="#" type="button" class="btn btn-warning">Edit</a>
                    <a href="#" type="button" class="btn btn-danger delete" volunteer-id="#">Hapus</a>
                </td>
            </tr>
        </tbody>

    </table>

</div>
@endsection