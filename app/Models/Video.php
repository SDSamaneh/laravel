<?php


namespace App\Models;

use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Video extends Model
{
      use HasFactory;

      protected $fillable = [
            'name',
            'path',
            'length',
            'thumbnail',
            'slug',
            'descrption',
            'category_id'
      ];

      public function getRouteKeyName()
      {
            return 'slug';
      }

      public function getLengthInHumanAttribute()
      {
            return gmdate('H:i:s', $this->value);
      }

      public function getCreatedAtAttribute($value)
      {
            return (new Verta($value))->formatDifference();
      }
      public function relatedVideos(int $count = 6)
      {
            return $this->category->getRandomVideos($count);
      }
      public function category()
      {
            return $this->belongsTo(Category::class);
      }
      public function getCategoryNameAttribute()
      {
            return $this->category?->name;
      }
      public function user()
      {
            return $this->belongsTo(User::class);
      }
      public function getOwnerNameAttribute()
      {
            return $this->user?->name;
      }

      public function getVideoUrlAttribute()
      {
            return '/storage/' . $this->path;
      }
}
