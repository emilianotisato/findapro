@extends('admin.layouts.app')

@section('title', 'Create Providers')

@section('content')
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-base font-semibold leading-6 text-gray-900">Update Provider</h1>

            </div>
            <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                <a href="{{ route('providers.index') }}"
                    class="block rounded-md
      bg-indigo-600 px-3 py-2 text-center text-sm font-semibold
      text-white shadow-sm hover:bg-indigo-500 focus-visible:outline 
      focus-visible:outline-2 focus-visible:outline-offset-2
      focus-visible:outline-indigo-600">Home</a>
            </div>
        </div>
        <x-admin.success-message />
        <div class="mt-8 container max-w-2xl m-auto">

            <form action="{{ route('providers.update', $provider->id) }}" method="post" class="">
                @csrf
                @method('PUT')
                <div>
                    <label for="companyname" class="block text-sm font-medium leading-6 text-gray-900">Company Name</label>
                    <div class="relative mt-2 rounded-md shadow-sm">
                        <input type="text" name="name" id="companyname" value="{{ $provider->name }}"
                            class="block w-full rounded-md border-0 p-2 pr-10 text-grey-900 ring-1 ring-inset ring-grey-300 @if ($errors->has('name')) text-red-900  ring-red-300 placeholder:text-red-300  focus:ring-2 focus:ring-inset focus:ring-red-500 @endif sm:text-sm sm:leading-6"
                            placeholder="" aria-invalid="true" aria-describedby="company-error">
                        @if ($errors->has('name'))
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
                    @if ($errors->has('name'))
                        <p class="mt-2 text-sm text-red-600" id="company-error">{{ $errors->first('name') }}</p>
                    @endif
                </div>

                <br>
                <div>
                    <label for="contactname" class="block text-sm font-medium leading-6 text-gray-900">Contact Name</label>
                    <div class="relative mt-2 rounded-md shadow-sm">
                        <input type="text" name="contact_name" id="contactname" value="{{ $provider->contact_name }}"
                            class="block w-full rounded-md ompany border-0 p-2 pr-10 text-grey-900 ring-1 ring-inset ring-grey-300 @if ($errors->has('contact_name')) text-red-900  ring-red-300 placeholder:text-red-300  focus:ring-2 focus:ring-inset focus:ring-red-500 @endif sm:text-sm sm:leading-6"
                            placeholder="" aria-invalid="true" aria-describedby="contact-name-error">
                        @if ($errors->has('contact_name'))
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
                    @if ($errors->has('contact_name'))
                        <p class="mt-2 text-sm text-red-600" id="contact-name-error">{{ $errors->first('contact_name') }}
                        </p>
                    @endif
                </div>

                <br>
                <div>
                    <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">Phone Number</label>
                    <div class="relative mt-2 rounded-md shadow-sm">
                        <input type="text" name="contact_phone" id="phone" value="{{ $provider->contact_phone }}"
                            class="block w-full rounded-md border-0 p-2 pr-10 text-grey-900 ring-1 ring-inset ring-grey-300 @if ($errors->has('contact_phone')) text-red-900  ring-red-300 placeholder:text-red-300  focus:ring-2 focus:ring-inset focus:ring-red-500 @endif sm:text-sm sm:leading-6"
                            placeholder="" aria-invalid="true" aria-describedby="phone-error">
                        @if ($errors->has('contact_phone'))
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
                    @if ($errors->has('contact_phone'))
                        <p class="mt-2 text-sm text-red-600" id="phone-error">{{ $errors->first('contact_phone') }}</p>
                    @endif
                </div>
                <br>
                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                    <div class="relative mt-2 rounded-md shadow-sm">
                        <input type="text" name="contact_email" id="email" value="{{ $provider->contact_email }}"
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

                <br>
                <div>
                    <label id="listbox-label" class="block text-sm font-medium leading-6 text-gray-900">Category</label>
                    <div class="relative mt-2">
                        <button type="button"
                            class="relative w-full cursor-default rounded-md bg-white py-1.5 pl-3 pr-10 text-left text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 sm:text-sm sm:leading-6"
                            aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
                            <span class="flex items-center">
                                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="" class="h-5 w-5 flex-shrink-0 rounded-full">
                                <span class="ml-3 block truncate">Tom Cook</span>
                            </span>
                            <span class="pointer-events-none absolute inset-y-0 right-0 ml-3 flex items-center pr-2">
                                <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </button>


                        <ul class="absolute z-10 mt-1 max-h-56 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm"
                            tabindex="-1" role="listbox" aria-labelledby="listbox-label"
                            aria-activedescendant="listbox-option-3">
                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-3 pr-9"
                                id="listbox-option-0" role="option">
                                <div class="flex items-center">
                                    <img src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                        alt="" class="h-5 w-5 flex-shrink-0 rounded-full">
                                    <span class="font-normal ml-3 block truncate">Plumber</span>
                                </div>

                                <span class="text-indigo-600 absolute inset-y-0 right-0 flex items-center pr-4">
                                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>


                <br>
                <br>
                <a href="{{ route('providers.new') }}"
                    class="block rounded-md
                bg-indigo-600 px-3 py-2 text-center text-sm font-semibold
                text-white shadow-sm hover:bg-indigo-500 focus-visible:outline 
                focus-visible:outline-2 focus-visible:outline-offset-2
                focus-visible:outline-indigo-600">Update</a>


            </form>
        </div>
    </div>

@endsection
