<tr class="bg-white border-b">
    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
        {{ $todo->title }}
    </td>
    <td class="px-6 py-4 text-sm text-gray-500">
        {{ Str::limit($todo->description, 60) }}
    </td>
    <td class="px-6 py-4 text-sm text-gray-500">
        {{ optional($todo->start_date)->format('Y-m-d') ?? '-' }}
    </td>
    <td class="px-6 py-4 text-sm text-gray-500">
        {{ optional($todo->end_date)->format('Y-m-d') ?? '-' }}
    </td>
    <td class="px-6 py-4">
        @if($todo->is_completed)
            <span class="inline-flex px-2 text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Completed</span>
        @else
            <span class="inline-flex px-2 text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Incomplete</span>
        @endif
    </td>
    <td class="px-6 py-4 text-right text-sm font-medium">
        <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-2">Edit</a>
        <form action="{{ route('todos.destroy', $todo) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
        </form>
    </td>
</tr>
