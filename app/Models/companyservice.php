<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companyservice extends Model
{
    use HasFactory;

    protected $fillable = [
        'task',
        'talk',
        'note',
        'file',
        'report',
    ];

}
