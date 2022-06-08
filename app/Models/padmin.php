<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class padmin extends Model
{
    use HasFactory;
    protected $primaryKey ='idpadmin';
    protected $table = "padmins";
    protected $fillable =['email','fname','idpadmin','lname','password','remember_token','created_at','updated_at'];
    protected $hidden =[];
}
