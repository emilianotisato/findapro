@extends('admin.layouts.app')

@section('title', 'Providers')

@section('content')
    
    <x-admin.table name="Providers"
        description="A list of all the providers in your account including their name, contact name, contact phone and category."
        :itemsMap="[
            'name' => 'Provider Name',
            'contact_name' => 'Contact Name',
            'contact_phone' => 'Contact Phone',
            'serviceCategory?->name' => 'Category',
        ]" :items="$providers" />

@endsection
