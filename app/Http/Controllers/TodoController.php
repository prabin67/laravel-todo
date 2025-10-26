<?php

namespace App\Http\Controllers;

use App\Actions\Todo\CreateTodoAction;
use App\Actions\Todo\ListTodosAction;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Actions\Todo\UpdateTodoAction;
use App\Actions\Todo\DeleteTodoAction;

class TodoController extends Controller
{
    public function index(ListTodosAction $listTodos)
    {
        $todos = $listTodos->execute();

        return view('todos.index', compact('todos'));
    }

    public function edit($id)
    {
        $todo = \App\Models\Todo::findOrFail($id);
        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request, UpdateTodoAction $action, $id)
    {
        $result = $action->execute($request->all(), $id);

        if (isset($result['error'])) {
            return back()->withErrors($result['error'])->withInput();
        }

        return redirect()->route('todos.index')->with('success', 'Todo updated successfully.');
    }

    public function destroy(DeleteTodoAction $action, $id)
    {
        $action->execute($id);
        return redirect()->route('todos.index')->with('success', 'Todo deleted successfully.');
    }

    public function store(Request $request, CreateTodoAction $createTodo): RedirectResponse
    {
        $createTodo->execute($request->only(['title', 'description', 'start_date', 'end_date']));

        return redirect()->route('todos.index')->with('success', 'Todo created.');
    }
}
