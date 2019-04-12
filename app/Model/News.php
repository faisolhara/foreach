<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{

    protected $table      = 'news';
    protected $primaryKey = 'news_id';

    const TEXT  = 'Text';
    const VIDEO = 'Video';

    const TECHNOLOGY = 'Technology';
    const LIFESTYLE  = 'Lifestyle';
    const BUSINESS   = 'Business';
    const CARRER     = 'Carrer';
    const JOKE       = 'Joke';


    public function tags()
    {
        return $this->hasMany(NewsTag::class, 'news_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(\App\User::class, 'created_by');
    }

    public static function listTags()
    {
        return [
            self::TECHNOLOGY,
            self::LIFESTYLE,
            self::BUSINESS,
            self::CARRER,
            self::JOKE,
        ];
    }
}
