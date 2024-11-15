<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Elector;
use App\Models\Governor;
use App\Models\Senator;
class PartyModel extends Model
{
    public function electors()
    {
        return $this->hasMany(Elector::class);
    }
    public function governors()
    {
        return $this->hasMany(Governor::class);
    }
    public function senators()
    {
        return $this->hasMany(Senator::class);
    }
}

