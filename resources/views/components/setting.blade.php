@props(['header'])

    <section class="max-w-4xl py-8 mx-auto">
        <h1 class="font-bold mb-2.5 text-3xl pb-2 border-b">{{$header}}</h1>

        <div class="flex mt-8">
            <side class="w-48">
                <h3 class="font-bold mb-4">NavBar</h3>
                <ul>
                    <li class="mb-1">
                        <a href="/admin/posts" class="{{ request()->is('admin/posts') ? 'text-blue-500' : ''}}">
                        All Posts
                    </a></li>
                    <li><a href="/admin/posts/create" class="{{ request()->is('admin/posts/create') ? 'text-blue-500' : ''}}">
                        New Post
                    </a></li>
                </ul>
            </side>
            <x-panel class="flex-1">
                {{$slot}}
            </x-panel>
        </div>
    </section>