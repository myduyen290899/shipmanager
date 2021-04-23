<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhGia extends Model
{
    use HasFactory;
    protected $table = 'danh_gia';
    protected $fillable = ['name', 'star', 'comment'];
    public $timestamps = false;
}
