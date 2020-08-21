<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{
    public function details() {
        return $this->hasOne(OpportunityDetail::class);
    }
}
