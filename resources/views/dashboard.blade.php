<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="mb-6">
                        <h3 class="text-lg font-medium mb-4">{{ __("Manage Projects") }}</h3>
                        
                        <!-- Create Project Button -->
                        <div class="mb-4">
                            <a href="{{ route('projects.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                                {{ __("Add New Project") }}
                            </a>
                        </div>
                        
                        <!-- Projects Table -->
                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white dark:bg-gray-700 rounded-lg overflow-hidden">
                                <thead class="bg-gray-100 dark:bg-gray-800">
                                    <tr>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Title</th>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Category</th>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Created</th>
                                        <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-gray-600">
                                    @forelse($projects ?? [] as $project)
                                    <tr>
                                        <td class="px-4 py-3 whitespace-nowrap">{{ $project->title }}</td>
                                        <td class="px-4 py-3 whitespace-nowrap">{{ $project->category }}</td>
                                        <td class="px-4 py-3 whitespace-nowrap">{{ $project->created_at->format('M d, Y') }}</td>
                                        <td class="px-4 py-3 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="{{ route('projects.show', $project) }}" class="text-blue-600 hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-300 mr-3">View</a>
                                            <a href="{{ route('projects.edit', $project) }}" class="text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-300 mr-3">Edit</a>
                                            <form class="inline-block" action="{{ route('projects.destroy', $project) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this project?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4" class="px-4 py-3 text-center text-gray-500 dark:text-gray-400">No projects found</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        
                        <!-- Pagination Links -->
                        @if(isset($projects) && $projects->hasPages())
                        <div class="mt-4">
                            {{ $projects->links() }}
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
