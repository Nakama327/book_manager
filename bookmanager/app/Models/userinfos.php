<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userinfos extends Model
{
    use HasFactory;

    protected $fillable = [
        'se',
        'username',
        'email',
        'password',
    ];

    public function reviewinfos()
    {
        return $this->hasMany(Reviewinfo::class);
    }
}
