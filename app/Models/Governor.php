<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Party;
use App\Models\State;

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
     return $this->belongsTo(Party::class);
    }
    public function state()
    {
     return $this->belongsTo(State::class);
    }
}
