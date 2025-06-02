<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medication extends Model
{
    //
    protected $fillable = ['name', 'batch', 'expiration_date', 'quantity'];
}
