<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Traffic_Updates extends Model
{
    protected $fillable = ['location', 'status', 'details'];
}
