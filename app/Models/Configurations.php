<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configurations extends Model
{
    use HasFactory;

    protected $fillable = [
        'is_header',
        'is_slider',
        'is_service',
        'is_blog',
        'is_brand',
        'is_about',
        'is_contact_us',
        'is_footer'
    ];
}
