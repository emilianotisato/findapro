<div>
    <div class="p-6 bg-[url('../../public/images/hero.jpg')] bg-cover bg-no-repeat">
        <h1 class="text-6xl drop-shadow-md text-green-500">Find the pro contractor you are looking for!</h1>

        <div class="w-full">
            <div class="mt-2 flex rounded-md shadow-sm">
                <input type="text" wire:model="query"
                    class="block w-full rounded-none rounded-l-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    placeholder="Electrician...">
                <div class="relative flex flex-grow items-stretch focus-within:z-10">

                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 text-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                    </div>
                    <input type="text"
                        class="block w-full rounded-none rounded-l-md border-0 py-1.5 pl-10 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        placeholder="Cannes...">
                </div>
                <button type="button"
                    wire:click="search"
                    class="relative -ml-px bg-green-600 inline-flex items-center gap-x-1.5 rounded-r-md px-3 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                    Search
                </button>
            </div>
            @if(count($results) > 0)
            <div class="absolute bg-white p-4 w-3/4">
                <p>resultados</p>
                <ul>
                    <li>resultado 1</li>
                    <li>resultado 2</li>
                    <li>resultado 3</li>
                </ul>
            </div>
            @endif
        </div>

        <div style="background-image: ">filters</div>
    </div>
</div>
