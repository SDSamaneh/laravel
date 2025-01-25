<?php


namespace App\Models;

use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
      use HasFactory;

      protected $fillable = [
            'name',
            'url',
            'length',
            'thumbnail',
            'slug'
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
      public function relatedVideos(int $count = 3)
      {
            return Video::all()->random($count);
      }
}
