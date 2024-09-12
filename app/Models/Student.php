<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

protected $primaryKey= 'studentId';

// public function getDateofbirthAttribute($value)
// {
//     return date('D-M-Y',strtotime($value));
// }
// protected $appends=['date_of_birth'];
protected $fillable=['name','course_name','gender','address','email','date_of_birth'];
protected $hidden=['studentId'];



}
