<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\teacher;
use App\Models\roomamphi ;
use App\Models\slot;

class reservation extends Model
{
    public function teacher ()
    {
        return $this->belongsTo(teacher::class,'idteacher');
    }
    public function roomamphi ()
    {
        return $this->belongsTo(roomamphi::class,'idroomamphi');
    }
    public function slot ()
    {
        return $this->belongsTo(slot::class,'idslot');
    }
    use HasFactory;
    protected $primaryKey = 'idreservation';
    protected $table = "reservations";
    protected $fillable =['dateres','idreservation','idroomamphi','idslot','idteacher'];
    protected $hidden =[];
}
