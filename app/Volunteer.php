<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    protected $table = 'volunteer';
    protected $fillable = ['nama_depan', 'nama_belakang', 'jenis_kelamin', 'nomor_telepon', 'alamat', 'nik_pengguna', 'email'];
}
