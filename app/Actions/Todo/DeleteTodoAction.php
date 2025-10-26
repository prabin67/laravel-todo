<?php

namespace App\Actions\Todo;

use App\Models\Todo;

class DeleteTodoAction
{
    public function execute(int $id): bool
    {
        $todo = Todo::findOrFail($id);
        $todo->delete();

        return true;
    }
}
