@extends('admin.layouts.app')

@section('title', 'Providers')

@section('content')
@include('components.admin.test')
<div>
    <ul>
        @foreach ($providers as $provider)
            <li>{{ $provider->name }} -  {{ $provider->contact_name }} - {{ $provider->contact_phone }} (Category:: {{$provider->serviceCategory?->name}})</li>
        @endforeach
    </ul>
</div>


@endsection

