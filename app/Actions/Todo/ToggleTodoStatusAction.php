<?php

namespace App\Actions\Todo;

use App\Models\Todo;

class ToggleTodoStatusAction
{
    public function execute(int $id)
    {
        $todo = Todo::findOrFail($id);
        $todo->is_completed = !$todo->is_completed;
        $todo->save();

        return $todo;
    }
}
