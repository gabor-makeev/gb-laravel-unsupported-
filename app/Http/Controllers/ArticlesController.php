<?php

namespace App\Http\Controllers;

class ArticlesController extends Controller
{
    public function show(string $categoryName)
    {
        return view('articlesPage', [
            'categoryName' => $categoryName,
            'articles' => $this->getNews()[$categoryName]
        ]);
    }
}
