<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $fillable = ['author_name', 'post_id'];

    public function post()
    {
        return $this->belongsTo(BlogPost::class);
    }

}
