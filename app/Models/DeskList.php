<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;

/**
 * class DeskList
 * @package App\Models
 * @property int $id
 * @property string $name
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @property Desk $desk
 * @property Collection|Card[] $cards
 * */

class DeskList extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function desk(): BelongsTo
    {
       return $this->belongsTo(Desk::class);
    }

    public function cards(): HasMany
    {
        return $this->hasMany(Card::class);
    }
}
