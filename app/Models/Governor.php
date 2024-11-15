<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PartyModel;
use App\Models\StateModel;

class Governor extends Model
{
    protected $fillable= [
        'name_governor',
        'gender',
        'party_id',
        'state_id'
    ];
    public function party()
    {
     return $this->belongsTo(PartyModel::class);
    }
    public function state()
    {
     return $this->belongsTo(StateModel::class);
    }
}
