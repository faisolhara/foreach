<?php

namespace App\Service;

class CommonService
{
    public static function getTopNews($limit = 10)
    {
        return \DB::table('news')
                    ->inRandomOrder()
                    ->limit($limit)
                    ->get();
    }

    public static function getLatestNews($limit = 10)
    {
        return \DB::table('news')
                    ->orderBy('created_at', 'desc')
                    ->limit($limit)
                    ->get();
    }
}