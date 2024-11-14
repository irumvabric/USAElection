<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Senator;
use App\Models\Governor;
use App\Models\Elector;

class StateModel extends Model
{
    public function senators(){
        return $this->hasMany(Senator::class);
    }
    public function electors(){
        return $this->hasMany(Elector::class);
    }
}
