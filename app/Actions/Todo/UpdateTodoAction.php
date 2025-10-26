<?php

namespace App\Actions\Todo;

use App\Models\Todo;
use Illuminate\Support\Facades\Validator;

class UpdateTodoAction
{
    public function execute(array $data, int $id)
    {
        $validator = Validator::make($data, [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'status' => 'required|in:completed,incomplete',
        ]);

        if ($validator->fails()) {
            return ['error' => $validator->errors()];
        }

        $todo = Todo::findOrFail($id);
        $todo->update($validator->validated());

        return $todo;
    }
}
