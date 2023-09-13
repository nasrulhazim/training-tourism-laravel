<x-app-layout>
    <div class="pt-4 bg-gray-100 dark:bg-gray-900">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
            <div>
                Post Details
            </div>

            <div class="mt-6 p-6 bg-white dark:bg-gray-800 shadow-md w-2/3">
                {{ $post->content }}

                <div class="flex justify-end">
                    @can('update', $post)
                        <a href="{{ route('posts.edit', $post) }}" class="px-4 py-2 bg-blue-300 mr-4">Update</a>
                    @endcan
                    <a href="{{ route('posts.index') }}" class="px-4 py-2 bg-gray-100">Back to Post List</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
