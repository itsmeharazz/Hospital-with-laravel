<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = ['doctor_name','slug','degrees','designation','time_to_patient','room_number','img','contact_number','doctor_fee','deparment_id','deparment_name'];
}
