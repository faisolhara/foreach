<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\GalleryTag;

class Gallery extends Model
{

    protected $table      = 'gallery';
    protected $primaryKey = 'gallery_id';

    const TEMPLATE = 'Template';
    const GALLERY  = 'Gallery';

    public function gallery_tag()
    {
        return $this->hasMany(GalleryTag::class, 'gallery_id');
    }

    public static function listTags()
    {
        return [
            self::TEMPLATE,
            self::GALLERY,
        ];
    }
}
