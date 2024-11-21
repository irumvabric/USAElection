<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\State;

class FlagModel extends Model
{
    protected $fillable= [
        'image',
    ];
    //
    public function state(){
        return $this->belongsTo(State::class);
    }
}
