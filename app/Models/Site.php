<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;
    protected $fillable = ['logo', 'mobile', 'email', 'phone', 'phone2', 'facebook', 'twitter', 'whatsapp', 'linkedin', 'instagram'];
}
