
    <x-dropdown>

        <x-slot name="trigger">
                <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex">
                        {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}

                <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;"/>
            </button>
        </x-slot>

        <x-dropdown-item href="/?{{ http_build_query(request()->except('category', 'page')) }}"
                         :active="request()->missing('category')">All
        </x-dropdown-item>

        @foreach($category as $categories)
            <x-dropdown-item 
                href="/?category={{$categories->slug}}&{{ http_build_query(request()->except('category', 'page')) }}"
                :active="isset($currentCategory) && $currentCategory->is($categories)">
                    {{ucwords($categories->name)}}
            </x-dropdown-item>

            <!-- {{ isset($currentCategory) && $currentCategory->is($categories) ? 'bg-blue-500 text white' : ''}} -->
            
        @endforeach
    </x-dropdown>