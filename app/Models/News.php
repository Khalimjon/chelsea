<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['title', 'short_content', 'content', 'photo', 'user_id'];


    public function user(){
        return $this->belongsTo(User::class);
    }
}
