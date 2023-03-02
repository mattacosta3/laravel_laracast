

    @auth
        <x-panel>
            <form method="POST" action="/post/{{ $post->slug }}/comments">
                @csrf

                <header class="flex items-center" >
                <img src="https://i.pravatar.cc/150?u={{ auth()->id() }}" alt="" 
                width="45" height="45" class="rounded-xl">
                    <h2 class="ml-4 font-bold"> What's your take? </h2>
                </header>

                <div class="mt-6">
                    <textarea name="body" class="w-full text-sm focus:outline-none focus:ring" 
                        rows="4" placeholder="Insert profound statement" required></textarea> 

                    @error('body')
                        <span class="text-red-900 text-xs">{{$message}}</span>
                    @enderror

                </div>

                <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
                    <x-form.button>Post</x-form.button>
                </div>

                
                
            </form>
        </x-panel>
    @else 
        <x-panel class="text-center mt-8">
            <p class="font-semibold">
                <a href="/register" class="hover:underline">Register</a> or 
                <a href="/login" class="hover:underline">Login</a>
                to leave a Comment.
            </p>
        </x-panel>
    @endauth