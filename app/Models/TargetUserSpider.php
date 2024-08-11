<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TargetUserSpider extends Model
{
    use HasFactory;

    protected $table = 'target_user_spider';

    protected $fillable = ['user_target'];
}
