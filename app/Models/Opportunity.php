<?php

namespace App\Models;

use App\Models\Lookups\Category;
use App\Models\Lookups\Country;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{
    protected $casts = [
        'deadline' => 'datetime'
    ];
    public function details() {
        return $this->hasOne(OpportunityDetail::class);
    }
    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function country() {
        return $this->belongsTo(Country::class);
    }
    public function user() {
        return $this->belongsTo(User::class, 'created_by');
    }
}
