<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpiderRaw extends Model
{
    use HasFactory;
    protected $table = 'spider_raw';
    protected $fillable = [
        'judul',
        'link',
        'isi',
        'penulis',
        'editor',
        'user_target',
        'proses',
        'sentiment',
    ];

    public $timestamps = true;
}
