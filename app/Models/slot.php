<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\reservation;

class slot extends Model
{
    public function reservation()
    {
        return $this->hasMany(reservation::class);
    }

    use HasFactory;
    protected $primaryKey = 'idslot';
    protected $table = "slots";
    protected $fillable =['end_time','idslot','start_time','created_at','updated_at'];
    protected $hidden =[];
}
