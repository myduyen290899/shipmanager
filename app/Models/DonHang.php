<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    
    use HasFactory;
    protected $table = 'donhang';
    protected $fillable = ['ca', 'don', 'gia','tenkh','sdt','diachi'];
    public $timestamps = false;
    public function nhanvien()  {
        return $this->belongsTo('App\Models\NhanVien', 'manv');
    }
}
