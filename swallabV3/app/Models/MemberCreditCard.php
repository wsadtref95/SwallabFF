<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberCreditCard extends Model
{
    protected $table = 'membercreditcards';
    
    use HasFactory;

    protected $fillable = [
        'm_id',
        'infos',
    ];

    
}
