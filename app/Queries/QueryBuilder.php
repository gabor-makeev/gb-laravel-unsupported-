<?php

namespace App\Queries;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

abstract class QueryBuilder
{
    abstract public function getModel(): Builder;
    abstract public function getAll(): Collection;
}
