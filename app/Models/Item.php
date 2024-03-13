<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $table = 'Item';
    public $timestamps = false;
    protected $fillable = [
        'Ten_hang', 'Don_vi_tinh', 'So_luong_nhap', 'Gia_nhap', 'Gia_ban'
    ];

}
