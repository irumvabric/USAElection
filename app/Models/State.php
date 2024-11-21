<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Senator;
use App\Models\Governor;
use App\Models\Elector;
use App\Models\FlagModel;

class State extends Model
{
    protected $fillable= [
        'code',
        'name',
        'pib',
        'population',
        'area',
        'id_flag'
    ];
    public function senators(){
        return $this->hasMany(Senator::class);
    }
    public function electors(){
        return $this->hasMany(Elector::class);
    }
    public function flag()
    {
        return $this->hasOne(FlagModel::class); 
    }
}
