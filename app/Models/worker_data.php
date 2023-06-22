<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class worker_data extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'career_id',
        'career_group',
        'name_career_th',
        'name_career_en',
        'name_career_arabic',
        'name_img'       
    ];
}
