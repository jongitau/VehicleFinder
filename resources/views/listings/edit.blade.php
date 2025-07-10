@extends('layout')

@section('content')

@include('partials._hero')

@include('partials._search')


<div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">

    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">Edit a vehicle's details</h2>
        <p class="mb-4">Edit: {{$listing->title}}, {{$listing->company}} details</p>
    </header>

    <form method="POST" action="{{ url('listings/'.$listing->id) }}">
        @csrf {{--prevent cross site scripting attacks, prevents forms on other websites from submitting to ours--}}
        @method('PUT')
        <div class="mb-6">
            <label for="company" class="inline-block text-lg mb-2">Vehicle registration</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company" value="{{$listing->company}}"/>

            @error('company')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="title" class="inline-block text-lg mb-2">Vehicle Type</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title" value="{{$listing->title}}"/>

            @error('title')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror

        </div>

        <div class="mb-6">
            <label for="tags" class="inline-block text-lg mb-2">Condition of Vehicle</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags" value="{{$listing->tags}}"/>

            @error('tags')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror

        </div>

        <div class="mb-6">
            <label for="tags" class="inline-block text-lg mb-2">Location of Vehicle</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location" value="{{$listing->location}}"/>

            @error('location')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror

        </div>
        {{-- wanjala add your code here for tracking--}}
        <button type="submit" class="bg-blue-500 text-white rounded py-2 px-4 hover:bg-blue-600">
            Update
        </button>

    </form>
</div>
@endsection
