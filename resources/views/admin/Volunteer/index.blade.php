@extends('admin.layouts.master')
@section('content')
<!-- Table Baru -->
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Volunteer</h1>
<p class="mb-4">Volunteer merupakan orang yang sukarela membantu membersihkan sampah.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Volunteer</h6>
    </div>
    <div class="card-body">

        <div class="table-responsive">
            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <!-- Button trigger modal -->
                        <div class="right">
                            <button type="button" class="btn btn-info btn-icon-split" data-toggle="modal" data-target="#exampleModal">
                                <span class="text">Tambah Data</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
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
                                        <a href="/volunteer/{{$volunteer->id}}/edit" type="button" class="btn btn-warning">Edit</a>
                                        <a href="#" type="button" class="btn btn-danger delete" volunteer-id="{{$volunteer->id}}">Hapus</a>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
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
                        <input name="nama_belakang" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Belakang">
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

@endsection

@section('script')
<script>
    $('.delete').click(function() {
        var volunteer_id = $(this).attr('volunteer-id');
        swal({
                title: "Yakin?",
                text: "Ingin dihapus data volunteer dengan id " + volunteer_id + "?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                console.log(willDelete);
                if (willDelete) {
                    window.location = "/volunteer/" + volunteer_id + "/delete";
                } else {

                }
            });
    });
</script>
@endsection