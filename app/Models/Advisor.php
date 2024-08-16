<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advisor extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'indexName',
        'investPeriod',
        'invest',
        'question',
        'response'
    ];
}
