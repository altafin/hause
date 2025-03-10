<?php

namespace App\Models\Person;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Type extends Model
{
    /** @use HasFactory<\Database\Factories\Person\TypeFactory> */
    use HasFactory, SoftDeletes;

    protected $table = 'people_types';
    protected $fillable = [
        'name',
    ];

    public function people(): HasMany
    {
        return $this->hasMany(Person::class);
    }

}
