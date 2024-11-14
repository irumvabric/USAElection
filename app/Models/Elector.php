<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PartyModel;
use App\Models\StateModel;

class Elector extends Model
{
    public function party()
    {
     return $this->belongsTo(PartyModel::class);
    }
    public function state()
    {
     return $this->belongsTo(StateModel::class);
    }
}
