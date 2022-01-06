<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'report';
    protected $fillable = ['body', 'to_phoneNumber', 'status', 'nameApi', 'error'];
}
