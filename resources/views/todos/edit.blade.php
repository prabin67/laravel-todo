@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-5">
    <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-xl font-semibold mb-4">Edit Todo</h2>
        <form action="{{ route('todos.update', $todo->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-gray-700">Title</label>
                <input type="text" name="title" value="{{ old('title', $todo->title) }}"
                       class="w-full border-gray-300 rounded-lg">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Description</label>
                <textarea name="description"
                          class="w-full border-gray-300 rounded-lg">{{ old('description', $todo->description) }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Start Date</label>
                <input type="date" name="start_date" value="{{ old('start_date', $todo->start_date) }}"
                       class="w-full border-gray-300 rounded-lg">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">End Date</label>
                <input type="date" name="end_date" value="{{ old('end_date', $todo->end_date) }}"
                       class="w-full border-gray-300 rounded-lg">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Status</label>
                <select name="status" class="w-full border-gray-300 rounded-lg">
                    <option value="incomplete" {{ $todo->status == 'incomplete' ? 'selected' : '' }}>Incomplete</option>
                    <option value="completed" {{ $todo->status == 'completed' ? 'selected' : '' }}>Completed</option>
                </select>
            </div>

            <div class="flex justify-between">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Update</button>
                <a href="{{ route('todos.index') }}" class="text-gray-500">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
