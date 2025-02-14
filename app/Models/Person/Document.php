<?php

namespace App\Models\Person;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Document extends Model
{
    /** @use HasFactory<\Database\Factories\Person\DocumentFactory> */
    use HasFactory;

    protected $table = 'people_documents';

    protected $fillable = [
        'value',
    ];

    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class);
    }

}
