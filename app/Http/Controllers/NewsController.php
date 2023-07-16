<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use App\Queries\NewsQueryBuilder;
use Illuminate\Contracts\View\View;

class NewsController extends Controller
{
    public function index(Category $category, NewsQueryBuilder $newsQueryBuilder): View
    {
        return view('news.index', [
            'category' => $category,
            'articles' => $newsQueryBuilder->getActiveNewsByCategory($category)
        ]);
    }

    public function show(News $news): View
    {
        return view('news.show', [
            'newsItem' => $news
        ]);
    }
}
