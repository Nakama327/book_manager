<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reviewinfos extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'book_id',
        'recommend',
        'comment',
    ];

    public function user()
    {
        return $this->belongsTo(userinfos::class, 'user_id');
    }

    public function book()
    {
        return $this->belongsTo(bookinfos::class, 'book_id');
    }
}
