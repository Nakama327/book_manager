<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookinfos extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_path',
        'title',
        'author',
        'publisher',
        'date',
        'isbn',
    ];

    public function reviewinfos()
    {
        return $this->hasMany(Reviewinfo::class);
    }
}
