<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\StateModel;
use App\Models\PartyModel;
class Governor extends Model
{
    public function state()
    {
        return $this->belongsTo(StateModel::class);
    }
    public function party()
    {
        return $this->belongsTo(PartyModel::class);
    }
}
