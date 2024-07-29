<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                
                <ul role="list" class="p-6 divide-y divide-gray-100">

                @foreach($posts as $post)

                <li class="flex justify-between gap-x-6 py-5">
                    <div class="flex min-w-0 gap-x-4">
                      <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/reserve/LJIZlzHgQ7WPSh5KVTCB_Typewriter.jpg?q=80&w=1992&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                      <div class="min-w-0 flex-auto">
                        <p class="text-sm font-semibold leading-6 text-gray-900">{{ $post->user->name}}</p>
                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{ $post->user->email}}</p>
                      </div>
                    </div>
                    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                    <a href="{{ route('posts.show', ['post' => $post->id]) }}">
                      <p class="text-md leading-6 text-gray-900 text-right font-semibold">{{ $post->title }}</p>
                      <p class="mt-1 text-xs leading-5 text-gray-500 text-right font-semibold">{{ $post->updated_at->diffForHumans() }}</p>
                    </a>
                    
                    </div>
                  </li>

                @endforeach

                </ul>

                {{ $posts->links() }}

            </div>
        </div>
    </div>
</x-app-layout>
