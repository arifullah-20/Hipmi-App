<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaApp extends Model
{
    use HasFactory;
    protected $table = "tb_anggota";
    protected $fillable = ['no', 'nama_anggota', 'jabatan', 'bidang_usaha'];
}
