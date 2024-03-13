<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'Category';
    public $timestamps = false;
    protected $fillable = [
        'Ten_danh_muc', 'Danh_muc_thiet_yeu'
    ];
}
