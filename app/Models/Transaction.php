<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    use HasFactory;

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'foreign_key', 'customer_id');
    }

    public function membership(): BelongsTo
    {
        return $this->belongsTo(Membership::class, 'foreign_key', 'membership_id');
    }

    public function promotion(): BelongsTo
    {
        return $this->belongsTo(Promotion::class, 'foreign_key', 'promotion_id');
    }
}
