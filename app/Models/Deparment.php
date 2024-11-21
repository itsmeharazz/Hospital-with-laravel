<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deparment extends Model
{
    use HasFactory;
    protected $fillable = ['deparment_name','slug','shot_des','long_des','img'];
   
}
