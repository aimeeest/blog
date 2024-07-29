<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 justify-center items-center">
        <div class="bg-white rounded-lg max-w-7xl mx-72 sm:px-6 lg:p-8">

            <div class="mb-6">
                <a href="{{ route('posts.edit', ['post' => $post->id])}}" class="bg-lightpink text-darkpink text-sm p-2 mr-4 rounded-sm">
                Update
                </a>

                <a href="{{ route('posts.delete', ['post' => $post->id])}}" class="bg-lightpink text-darkpink text-sm p-2 rounded-sm">
                    Delete
                </a>
            </div>

            


            <h1 class="text-2xl font-semibold my-2 leading-[4rem] border-b border-pink">{{ $post->title}}</h1>

            <p class="text-md my-6">
                {{ $post->body}}
            </p>

            <i class="my-20 text-xs text-pink"> {{ $post->updated_at->format('M d, Y') }} </i>
            
            <p class="text-xs text-pink">
                Author: {{ $post->user->name }}
            </p>

        </div>
    </div>

</x-app-layout>