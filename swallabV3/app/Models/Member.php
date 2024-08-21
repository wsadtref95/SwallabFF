<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'sum_tracking',
        'sum_fans',
        'ig_link',
        'fb_link',
        'threads_link',
        'bio',
        'created_at_date',
        'created_at_time',
        'updated_at_date',
        'updated_at_time',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
