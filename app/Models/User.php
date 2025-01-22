<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
// use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User 
{
    use HasApiTokens, HasFactory, Notifiable,SoftDeletes;

    // protected $primaryKey= 'studentId';

    // public function getDateofbirthAttribute($value)
    // {
    //     return date('D-M-Y',strtotime($value));
    // }
    // protected $appends=['date_of_birth'];
    // protected $fillable=['name','course_name','gender','address','email','date_of_birth'];
    // protected $hidden='studentId';
    





//     /**
//      * The attributes that are mass assignable.
//      *
//      * @var array<int, string>
//      */
//     protected $fillable = [
//         'name',
//         'email',
//         'password',
//     ];

//     /**
//      * The attributes that should be hidden for serialization.
//      *
//      * @var array<int, string>
//      */
//     protected $hidden = [
//         'password',
//         'remember_token',
//     ];

//     /**
//      * The attributes that should be cast.
//      *
//      * @var array<string, string>
//      */
//     protected $casts = [
//         'email_verified_at' => 'datetime',
//     ];
}
