<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Client extends Model
{
    protected $fillable = ['title', 'image', 'description'];
}