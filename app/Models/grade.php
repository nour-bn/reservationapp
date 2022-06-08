<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\teacher;

class grade extends Model
{
    public function teacher()
    {
        return $this->hasMany(teacher::class);
    }
    use HasFactory;
    protected $primaryKey = 'idgrade';
    protected $table = "grades";
    protected $fillable =['grade','idgrade','created_at','updated_at'];
    protected $hidden =[];
}
