<?php

namespace App\Http\Controllers;

use App\Queries\CategoriesQueryBuilder;
use Illuminate\Contracts\View\View;

class CategoriesController extends Controller
{
    public function index(CategoriesQueryBuilder $categoriesQueryBuilder): View
    {
        return view('categories.index', ['categories' => $categoriesQueryBuilder->getAll()]);
    }
}
