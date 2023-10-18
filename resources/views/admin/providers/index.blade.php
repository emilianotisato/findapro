@extends('admin.layouts.app')

@section('title', 'Providers')

@section('content')

    <x-admin.table name="Providers"
        description="A list of all the providers in your account including their name, contact name, contact phone and category."
        :itemsMap="[
            'name' => 'Provider Name',
            'contact_name' => 'Contact Name',
            'contact_phone' => 'Contact Phone',
            'category_name' => 'Category',
        ]" :items="$providers">

        <x-slot:actionButton>
            <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                <a href="{{ route('providers.new') }}"
                    class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Add Provider</a>
            </div>
        </x-slot>

    </x-admin.table>

@endsection
