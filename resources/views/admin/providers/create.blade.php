@extends('admin.layouts.app')

@section('title', 'Create Providers')

@section('content')
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-base font-semibold leading-6 text-gray-900">Create Provider</h1>

            </div>
            <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                <button type="button" onclick="window.location.href='/admin/providers/create'"
                    class="block rounded-md
      bg-indigo-600 px-3 py-2 text-center text-sm font-semibold
      text-white shadow-sm hover:bg-indigo-500 focus-visible:outline 
      focus-visible:outline-2 focus-visible:outline-offset-2
      focus-visible:outline-indigo-600">Add
                    Provider</button>
            </div>
        </div>
        <x-admin.success-message />
        <div class="mt-8 container max-w-2xl m-auto">

            <form action="/admin/providers" method="post" class="">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                    <div class="relative mt-2 rounded-md shadow-sm">
                        <input type="text" name="contact_email" id="email"
                            class="block w-full rounded-md border-0 p-2 pr-10 text-grey-900 ring-1 ring-inset ring-grey-300 @if ($errors->has('contact_email')) text-red-900  ring-red-300 placeholder:text-red-300  focus:ring-2 focus:ring-inset focus:ring-red-500 @endif sm:text-sm sm:leading-6"
                            placeholder="you@example.com" aria-invalid="true" aria-describedby="email-error">
                        @if ($errors->has('contact_email'))
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                <svg class="h-5 w-5 text-red-500" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0110 5zm0 10a1 1 0 100-2 1 1 0 000 2z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        @endif
                    </div>
                    @if ($errors->has('contact_email'))
                        <p class="mt-2 text-sm text-red-600" id="email-error">{{ $errors->first('contact_email') }}</p>
                    @endif
                </div>

                <button type="submit">Sumbit</button>

            </form>
        </div>
    </div>

@endsection
