<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Project Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100"></div>
                    <!-- Project Header with Actions -->
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-2xl font-bold">{{ $project->title }}</h3>
                        <div class="flex space-x-2">
                            <a href="{{ route('projects.edit', $project) }}" class="px-4 py-2 bg-black text-white rounded hover:bg-indigo-700 transition" style="background-color: cornflowerblue;">
                                {{ __("Edit") }}
                            </a>
                            <form action="{{ route('projects.destroy', $project) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this project?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700 transition">
                                    {{ __("Delete") }}
                                </button>
                            </form>
                        </div>
                    </div>
                    
                    <!-- Project Image -->
                    @if($project->image)
                    <div class="mb-6">
                        <img src="{{ asset('storage/' . $project->image) ?? $project->image }}" alt="{{ $project->title }}" class="rounded-lg max-h-96 object-contain">
                    </div>
                    @endif
                    
                    <!-- Project Details -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h4 class="text-lg font-medium mb-2">Description</h4>
                            <p class="text-gray-700 dark:text-gray-300">{{ $project->description }}</p>
                        </div>
                        
                        <div>
                            <h4 class="text-lg font-medium mb-2">Category</h4>
                            <p class="text-gray-700 dark:text-gray-300">{{ $project->category }}</p>
                            
                            <h4 class="text-lg font-medium mb-2 mt-4">Technologies</h4>
                            <div class="flex flex-wrap gap-2">
                                @foreach(json_decode($project->technologies) as $tech)
                                <span class="px-3 py-1 bg-gray-200 dark:bg-gray-700 rounded-full text-sm">{{ $tech }}</span>
                                @endforeach
                            </div>
                            
                            @if($project->demo_link)
                            <h4 class="text-lg font-medium mb-2 mt-4">Demo Link</h4>
                            <a href="{{ $project->demo_link }}" target="_blank" class="text-blue-600 dark:text-blue-400 hover:underline">
                                {{ $project->demo_link }}
                            </a>
                            @endif
                            
                            @if($project->github_link)
                            <h4 class="text-lg font-medium mb-2 mt-4">GitHub Repository</h4>
                            <a href="{{ $project->github_link }}" target="_blank" class="text-blue-600 dark:text-blue-400 hover:underline">
                                {{ $project->github_link }}
                            </a>
                            @endif
                            
                            <h4 class="text-lg font-medium mb-2 mt-4">Created</h4>
                            <p class="text-gray-700 dark:text-gray-300">{{ $project->created_at->format('M d, Y') }}</p>
                        </div>
                    </div>
                    
                    <!-- Back Button -->
                    <div class="mt-8"></div>
                        <a href="{{ route('dashboard') }}" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 transition">
                            {{ __("Back to Projects") }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>