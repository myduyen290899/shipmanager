<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{
    use HasFactory;
    protected $table = 'nhanvien';
    protected $fillable = ['manv', 'matkhau', 'tendem', 'ten'];
    public $timestamps = false;
    protected $primaryKey = "manv";  //trường khóa chính
    protected $keyType = 'string'; //kieur dữ liệu của trường đó
}
