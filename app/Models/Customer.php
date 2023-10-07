<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Customer extends Model
{
    use HasFactory;


    public function memberships(): HasMany
    {
        return $this->hasMany(Membership::class);
    }

    public function membershipsDiamond(): HasMany
    {
        return $this->hasMany(Membership::class)->diamond();
    }

    public function contactables()
    {
        return $this->hasMany(Customer::class, 'customer_id');
    }

    public function addresses()
    {
        return $this->morphedByMany(Address::class, 'contactable');
    }

    public function phones()
    {
        return $this->morphedByMany(Phone::class, 'contactable');
    }
}
