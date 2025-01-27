<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'file',
        'slug',
        'descrption',
        'internal_doc_id'
    ];

    public function internalDocCategory()
    {
        return $this->belongsTo(InternalDocCategory::class);
    }
}
