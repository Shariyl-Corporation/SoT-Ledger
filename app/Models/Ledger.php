<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ledger extends Model
{
    use HasFactory;


    public function avatar(): BelongsTo
    {
        return $this->belongsTo(PossibleUser::class, 'user');
    }
}
