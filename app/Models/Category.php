<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function videos()
    {
        return $this->hasMany(video::class);
    }
    public function getRandomVideos(int $count = 6)
    {
        return $this->videos()->inRandomOrder()->get()->take($count);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
