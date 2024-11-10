<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    //table
    protected $table = 'author';
    protected $fillable = [
        'name'
    ];

    public function post()
    {
        return $this->hasMany(Posts::class, 'author_id', 'id');
    }
}
