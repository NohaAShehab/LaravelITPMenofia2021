<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    ######## fillable
    protected $fillable=["name","email","phone","age"];

    #guarded
//    protected $guarded=["age"];

//    protected $guarded=["confirmemail"];
}
