<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class app_prank_scripts extends Model
{
    use HasFactory;
    protected $fillable = [
        'ext_id',
        'slug',
        'title',
        'likes',
        'our_likes',
        'our_dislikes',
        'our_favorites',
        'views',
        'sent',
        'our_sent',
        'prank_of_the_week',
        'tags',
        'description',
        'share_text',
        'img_url',
        'default_app_character_id',
        'created',
        'modified',
        'synced'
    ];
}
