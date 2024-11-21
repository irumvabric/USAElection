<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\State;
use App\Models\Party;

class Candidate extends Model
{
    protected $fillable= [
        'name_candidate',
        'gender',
        'party_id',
        'state_id'
    ];//

    public function party()
    {
     return $this->belongsTo(Party::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
