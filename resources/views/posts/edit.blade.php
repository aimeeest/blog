<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create a post') }}
        </h2>
    </x-slot>

    <div class="py-12">

        
            <x-forms.posts>
            <form class="space-y-6" action="{{ route('posts.update', ['post' => $post->id]) }}" method="POST">
                @csrf
                @method('put')

                <div>
                <label for="email" class="block text-lg my-2 font-medium leading-6 text-gray-900">Title</label>
                <div class="mt-2">
                    <input id="title" name="title" type="title" required value="{{ $post->title ?? old('title') }}" class="block w-full rounded-md border-0 p-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-lightpink sm:text-sm sm:leading-6">
                </div>
                    @error('title')
                        <span class="text sm text-red-900">{{ $message }} </span>
                    @enderror
                </div>
        
                <div>
                <div class="flex items-center justify-between">
                    <label for="body" class="block text-lg my-2 font-medium leading-6 text-gray-900">Body</label>
                </div>

                    @error('body')
                    <span class="text sm text-red-900">{{ $message }} </span>
                    @enderror

                <div class="mt-2">
                    <input id="body" rows="4" name="body" type="body" required value="{{ $post->body ?? old('body') }}" class="block w-full rounded-md border-0 p-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-inset focus:ring-lightpink sm:text-sm sm:leading-6">
                </div>
                </div>
        
                <div>
                <button type="submit" class="flex justify-center items-center rounded-md bg-darkpink px-3 py-1.5 text-sm leading-6 text-white shadow-sm hover:bg-lightpink focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-lightpink">Update post</button>
                </div>
            </form>
            </x-forms.posts>

    </div>
</x-app-layout>
