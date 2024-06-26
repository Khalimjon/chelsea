<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Stuff extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'position', 'age', 'describtion', 'photo'];
}
