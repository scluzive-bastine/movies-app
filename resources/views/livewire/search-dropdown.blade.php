<div x-data="{ isOpen: true}" @click.away="isOpen = false">
    <div class="relative">
        <input
         wire:model.debounce.500ms="search" type="text" class="bg-gray-800 text-small rounded-full w-64 px-4 py-1 pl-8 focus:outline-none focus:shadow-outline" placeholder="Search"
         @focus="isOpen = true"
         @keydown="isOpen = true"
         @keydown.escape.window="isOpen = false"
         @keydown.shift.tab="isOpen = false"
         >
        <div class="absolute top-0">
            <svg class="fill-current text-gray-500 mt-2 ml-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path d="M12.7 11.3c.9-1.2 1.4-2.6 1.4-4.2 0-3.9-3.1-7.1-7-7.1S0 3.2 0 7.1c0 3.9 3.2 7.1 7.1 7.1 1.6 0 3.1-.5 4.2-1.4l3 3c.2.2.5.3.7.3s.5-.1.7-.3c.4-.4.4-1 0-1.4l-3-3.1zm-5.6.8c-2.8 0-5.1-2.2-5.1-5S4.3 2 7.1 2s5.1 2.3 5.1 5.1-2.3 5-5.1 5z" fill="#111"/></svg>
        </div>
    </div>
    <div wire:loading class="spinner top-0 right-0 mt-10" style="margin-right: 7rem"></div>
    @if (strlen($search) > 2)    
        <div 
            class="z-50 absolute bg-gray-800 text-sm rounded w-64 mt-4"
            x-show.transition.opacity="isOpen"
         >
            @if ($searchResults->count() > 0)
                <ul>
                    @foreach ($searchResults as $result)
                        <li class="border-b border-gray-700">
                            <a
                             href=" {{ url('/movies/'.$result['id']) }} }} " class="block hover:bg-gray-700 px-3 py-3 flex items-center"
                             @if($loop->last) @keydown.tab="isOpen = false" @endif
                             >
                                @if ($result['poster_path'])
                                    <img src=" https://image.tmdb.org/t/p/w92/{{ $result['poster_path'] }} " alt="poster" class="w-8">
                                @else
                                <img src=" https://via.placeholder.com/50x75 " alt="poster" class="w-8">
                                @endif
                                 <span class="ml-3">{{ $result['title'] }} </span>
                            </a>
                        </li>
                    @endforeach
                </ul>  
            @else 
            <div class="px-3 py-3">No Results for *{{$search}}*</div>
            @endif
        </div>
    @endif

</div>  
