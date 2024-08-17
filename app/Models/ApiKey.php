<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiKey extends Model
{
    use HasFactory;


    protected $table = 'api_keys';
    protected $fillable = ['key', 'user_id', 'active'];

    // Relasi dengan model User (jika diperlukan)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
