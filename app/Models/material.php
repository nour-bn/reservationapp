<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\roomamphi;

class material extends Model
{

    public function roomamphi()
    {
        return $this->belongsTo(roomamphi::class);
    }

    use HasFactory;
    protected $primaryKey ='idmaterial';
    protected $table = "materials";
    protected $fillable =['idmaterial','numser','specs','state','Type','created_at','updated_at'];
    protected $hidden =[];
}
