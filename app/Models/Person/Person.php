<?php

namespace App\Models\Person;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{
    /** @use HasFactory<\Database\Factories\Person\PersonFactory> */
    use HasFactory, SoftDeletes;

    protected $table = 'people';

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(PersonType::class);
    }

    public function categories(): HasMany
    {
        return $this->hasMany(Category::class);
    }

}
