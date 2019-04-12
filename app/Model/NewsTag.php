<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class NewsTag extends Model
{

    protected $table      = 'news_tag';
    protected $primaryKey = 'news_tag_id';

    const TECHNOLOGY = 'Technology';
    const LIFESTYLE  = 'Lifestyle';
    const BUSINESS   = 'Business';
    const CARRER     = 'Carrer';
    const JOKE       = 'Joke';

}
