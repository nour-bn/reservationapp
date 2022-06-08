<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\roomamphitype;
use App\Models\material;
use App\Models\reservation;


class roomamphi extends Model
{
    public function roomamphitype ()
    {
        return $this->belongsTo(roomamphitype::class,'idroomamphitype');
    }

    public function material ()
    {
        return $this->belongsTo(material::class,'idmaterial');
    }

    public function reservation()
    {
        return $this->hasMany(reservation::class);
    }
    use HasFactory;
    protected $primaryKey ='idroomamphi';
    protected $table = "roomamphis";
    protected $fillable =['capacity','floor','idmaterial','idroomamphi','idroomamphitype','num','created_at','updated_at'];
    protected $hidden =[];

}
