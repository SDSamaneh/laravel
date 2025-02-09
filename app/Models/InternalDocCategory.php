<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternalDocCategory extends Model
{
    use HasFactory;

    public function documents()
    {
        return $this->hasMany(Document::class);
    }
}
