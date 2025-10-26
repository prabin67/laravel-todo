@extends('layouts.app')

@section('content')
    <div class="bg-white shadow rounded p-6">
        @if(session('success'))
            <div class="mb-4 text-green-700 bg-green-100 p-2 rounded">{{ session('success') }}</div>
        @endif

        <!-- Create form -->
        <form action="{{ route('todos.store') }}" method="POST" class="mb-6 grid grid-cols-1 md:grid-cols-4 gap-3">
            @csrf
            <div class="col-span-2">
                <label class="block text-sm font-medium text-gray-700">Title</label>
                <input name="title" required class="mt-1 block w-full border-gray-300 rounded-md" />
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Start Date</label>
                <input name="start_date" type="date" class="mt-1 block w-full border-gray-300 rounded-md" />
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">End Date</label>
                <input name="end_date" type="date" class="mt-1 block w-full border-gray-300 rounded-md" />
            </div>
            <div class="col-span-4">
                <label class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" rows="2" class="mt-1 block w-full border-gray-300 rounded-md"></textarea>
            </div>
            <div class="col-span-4 text-right">
                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded">Add Todo</button>
            </div>
        </form>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Start</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">End</th>
                        <th class="px-6 py-3">Status</th>
                        <th class="px-6 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($todos as $todo)
                        <x-todo-row :todo="$todo" />
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-4 text-center text-gray-500">No todos found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $todos->links() }}
        </div>
    </div>
@endsection
