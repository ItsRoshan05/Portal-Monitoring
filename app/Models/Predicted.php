<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Predicted extends Model
{
    use HasFactory;

    protected $table = 'predicted';
    protected $fillable = [
        'id_spider_raw',
        'proses',
        'sentiment',

    ];
    public $timestamps = true;


    // Definisikan relasi dengan model SpiderRaw
    public function spiderRaw()
    {
        return $this->belongsTo(SpiderRaw::class, 'id_spider_raw', 'id');
    }
}
