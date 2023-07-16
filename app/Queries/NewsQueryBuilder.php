<?php

namespace App\Queries;

use App\Models\Category;
use App\Models\News;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class NewsQueryBuilder extends QueryBuilder
{

    public function getModel(): Builder
    {
        return News::query();
    }

    public function getActiveNewsByCategory(Category $category)
    {
        return $category->news()->active()->get();
    }

    public function getAll(): Collection
    {
        return $this->getModel()->get();
    }
}
