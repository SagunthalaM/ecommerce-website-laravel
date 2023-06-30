<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'picuture','title','price','description'
    ];

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
