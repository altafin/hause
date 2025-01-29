<?php

namespace App\Models\Person;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\Person\CategoryFactory> */
    use HasFactory, SoftDeletes;

    protected $table = 'people_categories';
    protected $fillable = [
        'name'
    ];

    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class);
    }

}
