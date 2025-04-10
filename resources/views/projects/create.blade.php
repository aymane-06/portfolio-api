<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Project') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ isset($project) ? route('projects.update', $project) : route('projects.store') }}" method="POST" enctype="multipart/form-data">
                        @if(isset($project))
                            @method('PUT')
                        @endif
                        @csrf
                        
                        <div class="mb-4">
                            <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                Project Title <span class="text-red-600">*</span>
                            </label>
                            <input type="text" name="title" id="title" value="{{ old('title', $project['title'] ?? '' ) }}" class="w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                            @error('title')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                Description <span class="text-red-600">*</span>
                            </label>
                            <textarea name="description" id="description" rows="5" class="w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>{{ old('description', $project['description'] ?? '') }}</textarea>
                            @error('description')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="image" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                Project Image
                            </label>
                            <input type="file" name="image" id="image" class="w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            @error('image')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="category" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                Category <span class="text-red-600">*</span>
                            </label>
                            <select name="category" id="category" class="w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                                <option value="">Select a category</option>
                                <option value="Web Development" {{ old('category',$project['category']) == 'Web Development' ? 'selected' : '' }}>Web Development</option>
                                <option value="Mobile Development" {{ old('category',$project['category']) == 'Mobile Development' ? 'selected' : '' }}>Mobile Development</option>
                                <option value="UI/UX Design" {{ old('category',$project['category']) == 'UI/UX Design' ? 'selected' : '' }}>UI/UX Design</option>
                                <option value="Data Science" {{ old('category',$project['category']) == 'Data Science' ? 'selected' : '' }}>Data Science</option>
                                <option value="Other" {{ old('category',$project['category']) == 'Other' ? 'selected' : '' }}>Other</option>
                            </select>
                            @error('category')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                Technologies <span class="text-red-600">*</span>
                            </label>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
                                <select id="technologies-select" name="technologies[]" multiple 
                                    class="w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                    @foreach(['PHP', 'Laravel', 'JavaScript', 'Vue.js', 'React', 'Node.js', 'Python', 'Django', 'CSS', 'Tailwind CSS', 'MySQL', 'MongoDB'] as $tech)
                                    <option value="{{ $tech }}" 
                                        {{ is_array(old('technologies',$project['technologies'] ?? [])) && in_array($tech, old('technologies' ,$project['technologies'] ?? [])) ? 'selected' : '' }}>
                                        {{ $tech }}
                                    </option>
                                    @endforeach
                                </select>

                                <script src="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/js/tom-select.complete.min.js"></script>
                                <link href="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/css/tom-select.css" rel="stylesheet">
                                <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        new TomSelect('#technologies-select', {
                                            plugins: ['remove_button'],
                                            placeholder: 'Select technologies...',
                                            create: true,
                                            maxItems: null,
                                        });
                                    });
                                </script>
                            </div>
                            @error('technologies')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="demo_link" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                Demo Link
                            </label>
                            <input type="url" name="demo_link" id="demo_link" value="{{ old('demo_link',$project['demo_link']) }}" placeholder="https://example.com" class="w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            @error('demo_link')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="github_link" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                GitHub Link
                            </label>
                            <input type="url" name="github_link" id="github_link" value="{{ old('github_link',$project['github_link']) }}" placeholder="https://github.com/username/repo" class="w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            @error('github_link')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center gap-4">
                            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                                {{ __("Create Project") }}
                            </button>
                            <a href="{{ route('dashboard') }}" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 transition">
                                {{ __("Cancel") }}
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout></div>