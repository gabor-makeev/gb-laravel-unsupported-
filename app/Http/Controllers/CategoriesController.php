<?php

namespace App\Http\Controllers;

class CategoriesController extends Controller
{
    public function show()
    {
        return view('categoriesPage', ['categories' => array_keys($this->getNews())]);
    }
}
