<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApiLog extends Model
{
    protected $fillable = [
        'country',
        'last_access',
    ];

    protected $table = 'api_logs';

    protected $dates = ['last_access'];

    public $timestamps = false;
}