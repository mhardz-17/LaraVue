<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['name','description','start_date', 'end_date'];
    public $timestamps = false;
}
