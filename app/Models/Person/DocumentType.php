<?php

namespace App\Models\Person;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentType extends Model
{
    /** @use HasFactory<\Database\Factories\Person\DocumentTypeFactory> */
    use HasFactory;

    protected $table = 'people_document_types';

    protected $fillable = [
        'name',
    ];

}
