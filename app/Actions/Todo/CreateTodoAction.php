<?php

namespace App\Actions\Todo;

use App\Models\Todo;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class CreateTodoAction
{
    public function execute(array $data): Todo
    {
        $validator = Validator::make($data, [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'start_date' => ['nullable', 'date'],
            'end_date' => ['nullable', 'date', 'after_or_equal:start_date'],
        ]);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        $payload = Arr::only($data, ['title', 'description', 'start_date', 'end_date']);

        return Todo::create($payload);
    }
}
