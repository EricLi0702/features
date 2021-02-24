<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class app_categories extends Model
{
    use HasFactory;
    protected $fillable = [
        'ext_id',
        'status',
        'slug',
        'name',
        'img_url',
        'ord',
        'created',
        'modified',
        'synced'
    ];
}
