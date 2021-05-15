<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EVent extends Model
{
    use HasFactory;
    protected $table = 'sukien';
    protected $fillable = ['tittle', 'noidung'];
    public $timestamps = false;
}
