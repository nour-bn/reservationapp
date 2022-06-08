<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\roomamphi;

class roomamphitype extends Model
{
    public function roomamphi()
    {
        return $this->hasMany(roomamphi::class);
    }

    use HasFactory;
    protected $primaryKey ='idroomamphitype';
    protected $table = "roomamphitypes";
    protected $fillable =['idroomamphitype','type','created_at','updated_at'];
    protected $hidden =[];


}
