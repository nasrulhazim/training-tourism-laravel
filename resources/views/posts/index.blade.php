<x-guest-layout>
    <div class="pt-4 bg-gray-100 dark:bg-gray-900">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
            <div>
                <x-authentication-card-logo />
            </div>

            <div class="mt-6 p-6 bg-white dark:bg-gray-800 shadow-md ">
                {{ $posts->links() }}

                @foreach ($posts as $post)
                    <li class="my-2">{{ $post->user->name }} - {{ $post->content }}</li>
                @endforeach

                {{ $posts->links() }}
            </div>
        </div>
    </div>
</x-guest-layout>
