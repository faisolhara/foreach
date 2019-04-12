<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\News;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        
        $models = News::select('news.*')->orderBy('news.created_at', 'desc')
                        ->leftJoin('news_tag', 'news_tag.news_id', '=', 'news.news_id');

        if(!empty($request->get('tag'))){
            $models->where('news_tag.tag', $request->get('tag'));
        }

        if(!empty($request->get('search'))){
            $models->where(function ($query) use ($request) {
                $query->where('news.title', 'ilike', '%'.$request->get('search').'%')
                  ->orWhere('news.content', 'ilike', '%'.$request->get('search').'%');
            });
        }

        return view('news',[
                'models' => $models->distinct()->paginate(4),
            ]);

    }
}
