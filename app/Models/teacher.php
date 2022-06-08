<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\grade;
use App\Models\reservation;

class teacher extends Model
{
    public function grade()
    {
        return $this->belongsTo(grade::class,'grade_idgrade');
    }
    public function reservation()
    {
        return $this->hasMany(reservation::class);
    }
    use HasFactory;
    protected $primaryKey = 'idteacher';
    protected $table = "teachers";
    protected $fillable =['email','password','department','fname','idteacher','lname','numtel','state','status','grade_idgrade','created_at','remember_token','updated_at'];
    protected $hidden =[];
}
