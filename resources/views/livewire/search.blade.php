<div class="h-full">
    
    <div class="h-full flex flex-col justiy-center items-center p-6 bg-[url('https://assets.website-files.com/5d678d8bf62c496ff5518edb/5d6eafbf580e4b527bb8676e_58794cfe6f07d8b870f7f623_handshake.jpeg')] bg-cover bg-no-repeat place-content-center">
        <h1 class="text-6xl drop-shadow-md text-white">Find the pro contractor</h1>
        <h1 class="text-6xl drop-shadow-md text-white">you are looking for!</h1>
    
        <div class="w-full  max-w-[550px]">
            <div class="mt-2 flex flex-col flex-shrink md:flex-row rounded-md shadow-sm ">
                <input type="text" wire:model="query"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    placeholder="Electrician...">
                <div class="relative flex-auto flex-grow items-stretch focus-within:z-10 ">

                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 text-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                    </div>
                    @if(! $selectedLocation)
                    <div>
                        <input type="text" wire:model.live="locationSearch"
                        class="block w-full min-w-[200px] rounded-l-md border-0 py-1.5 pl-10 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        placeholder="Cannes...">
                    </div>
                    
                    @else
                   
                    <input type="text" wire:model.live="locationSearch"
                        class="block w-full min-w-[200px] rounded-none rounded-l-md border-0 py-1.5 pl-10 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        placeholder="{{$selectedLocation->name}}" disabled>
                        <button wire:click="clearLocation" class="bg-white text-1xl flex items-center">
                            <div class="absolute inset-y-0 right-0 flex items-center pl-3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5" stroke-width="0"
                            stroke="currentColor" class="w-6 h-6 text-gray-400">
                                <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                              </svg>        

                            </div>                                         
                        </button>
                    @endif
                        

                </div>
                <button type="button" wire:click="getResults"
                    class="relative -ml-px bg-cyan-600	 inline-flex items-center gap-x-1.5 rounded-r-md px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                    Search
                </button>
            </div>
            @if (count($locations) > 0)
                <div class="absolute bg-white p-4 w-3/4 z-50">
                    <ul>
                        @foreach ($locations as $location)
                            <li>
                                <button wire:click="selectLocation({{ $location }})">
                                    {{ $location->name }}
                                </button>
                            </li>
                        @endforeach
                    </ul>
                </div>

            @endif
            @if (count($results) > 0)
                <div class="absolute bg-white p-4 w-3/4">
                    <ul>
                        @foreach ($results as $service)
                            <li>
                                <a href="{{ route('public.services.show', ['service' => $service->id]) }}">
                                    {{ $service->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <button>
            <div class="w-24 mt-2 bg-cyan-600 gap-x-1.5 rounded-md text-sm font-semibold">Filters</div>
        </button>
    </div>
</div>
