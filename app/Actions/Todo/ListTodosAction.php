<?php

namespace App\Actions\Todo;

use App\Models\Todo;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class ListTodosAction
{
    public function execute(int $perPage = 10): LengthAwarePaginator
    {
        return Todo::orderBy('created_at', 'desc')->paginate($perPage);
    }
}
