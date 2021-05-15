<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DangKi extends Model
{
  
    use HasFactory;
    protected $table = 'dangki';
    protected $fillable = ['name', 'tuoi', 'trinhdo','sdt','diachi','noidung'];
    public $timestamps = false;
}
