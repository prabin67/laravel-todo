<?php

namespace App\Http\Controllers;

use App\Actions\Todo\CreateTodoAction;
use App\Actions\Todo\ListTodosAction;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TodoController extends Controller
{
    public function index(ListTodosAction $listTodos): View
    {
        $todos = $listTodos->execute(10);

        return view('todos.index', compact('todos'));
    }

    public function store(Request $request, CreateTodoAction $createTodo): RedirectResponse
    {
        $createTodo->execute($request->only(['title', 'description', 'start_date', 'end_date']));

        return redirect()->route('todos.index')->with('success', 'Todo created.');
    }
}
