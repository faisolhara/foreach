<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class GalleryTag extends Model
{

    protected $table      = 'gallery_tag';
    protected $primaryKey = 'gallery_tag_id';

    public function gallery()
    {
        return $this->belongsTo(Gallery::class, 'gallery_id');
    }
}
