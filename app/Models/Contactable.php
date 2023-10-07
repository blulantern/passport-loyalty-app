<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactable extends Model
{
    use HasFactory;

    protected $table = 'contactables';
    protected $fillable = ['contactable_id', 'contactable_type'];

    public function customer()
    {
        return $this->hasMany(Customer::class, 'customer_id');
    } 

    public function contactable()
    {
        return $this->morphTo();
    }
}