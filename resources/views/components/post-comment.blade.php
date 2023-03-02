@props(['comments']) 
 
 <x-panel class="bg-gray-100">
        <article class="flex space-x-4">
            <div class="flex-shrink-0">
                <img src="https://i.pravatar.cc/150?u={{$comments->author->id}}" alt="" width="60" height="60" class="rounded-xl">
            </div>
            
            <div>
                <header>
                    <h3 class="font-bold">{{$comments->author->username}}</h3>
                
                    <p class="test-xs">
                        Posted
                        <time>{{ $comments->created_at->format('g:i a ~  F j, Y') }}</time>
                    </p>
                </header>

                <p>
                    {{$comments->body}}
                </p>
            </div>
        </article>
    </x-panel>