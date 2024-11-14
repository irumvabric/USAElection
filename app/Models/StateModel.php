<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Elector;
use App\Models\Senator;
use App\Models\Governor;
class StateModel extends Model
{
    public function electors()
    {
        return $this->hasMany(Elector::class);
    }
    public function senators()
    {
        return $this->hasMany(Senator::class);
    }
    public function governors()
    {
        return $this->hasMany(Governor::class);
    }
}
