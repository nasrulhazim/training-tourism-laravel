<x-app-layout>
    <div class="pt-4 bg-gray-100 dark:bg-gray-900">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
            <div>
                Update Post
            </div>

            <div class="mt-6 p-6 bg-white dark:bg-gray-800 shadow-md ">
                <form method="POST" action="{{ route('posts.update', $post) }}">
                    @csrf
                    @method('PUT')

                    <input type="text" name="content" class="w-full my-4" value="{{ $post->content }}" />

                    @error('content')
                        <div class="text-red-700 italic">{{ $message }}</div>
                    @enderror

                    <button class="w-full bg-indigo-700 py-2 px-4 text-white">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
