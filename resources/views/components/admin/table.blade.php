<div class="px-4 sm:px-6 lg:px-8">
  <div class="sm:flex sm:items-center">
    <div class="sm:flex-auto">
      <h1 class="text-base font-semibold leading-6 text-gray-900">{{ $name }}</h1>
      <p>{{ $description }}</p>
    </div>
    <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
      <a href="{{ route('providers.new') }}"
      class="block rounded-md
      bg-indigo-600 px-3 py-2 text-center text-sm font-semibold
      text-white shadow-sm hover:bg-indigo-500 focus-visible:outline 
      focus-visible:outline-2 focus-visible:outline-offset-2
      focus-visible:outline-indigo-600">Add Provider</a>
    </div>
  </div>
  <x-admin.success-message />
  <div class="mt-8 flow-root">
    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
        <table class="min-w-full divide-y divide-gray-300">
          <thead>
            <tr>
              @foreach ($itemsMap as $header) 
                <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">{{$header}}</th>
              @endforeach
              
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200">
              @foreach ($items as $item) 
                <tr>
                  @foreach ($itemsMap as $attribute => $header)
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">{{ $item->{$attribute} }}</td>
                  @endforeach
              
                  <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                    <a href="{{ route('providers.edit', ['provider' => $item->id]) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                  </td>
                </tr>
              @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
      {{ $items->links() }}
