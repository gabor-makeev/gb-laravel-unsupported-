<?php

namespace App\Http\Controllers;

class ArticleController extends Controller
{
    public function show($categoryName, $articleId)
    {
        return view('articlePage', [
            'article' => $this->getNews()[$categoryName][$articleId]
        ]);
    }
}
