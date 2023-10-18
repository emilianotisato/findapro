@extends('layouts.app')

@section('title', 'Welcome to Findapro')

@section('content')
<div class="md:grid grid-cols-3">
    <div class="col-span-2 bg-red-400">
        <livewire:search />
    </div>
    <div class="col-span-1 my-2 md:my-0 bg-green-400">signup form</div>
</div>
@endsection