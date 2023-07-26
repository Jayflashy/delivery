<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'email',
        'description',
        'address',
        'phone',
        'logo',
        'favicon',
        'touch_icon',
        'facebook',
        'twitter',
        'whatsapp',
        'instagram', 'telegram',
        'primary_color',
        'sec_color', 'currency',
        'currency_code',
        'custom_js',
        'custom_css',
        'is_adsense',
        'meta_keywords','is_announcement','announcement', 'slider1','slider2','slider3','slider4','slider5','slider6',
    ];
}
