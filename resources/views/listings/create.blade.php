@extends('layout')

@section('content')

@include('partials._hero')

@include('partials._search')


<div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">

    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">create a listing</h2>
        <p class="mb-4">Post a vehicle's history and condition</p>
    </header>

    <form method="POST" action="/listings/store">
        @csrf
        <div class="mb-6">
            <label for="company" class="inline-block text-lg mb-2">Vehicle registration</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company" />
        </div>

        <div class="mb-6">
            <label for="title" class="inline-block text-lg mb-2">Vehicle Type</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title" />
        </div>

        <div class="mb-6">
            <label for="tags" class="inline-block text-lg mb-2">Condition of Vehicle</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags" />
        </div>

        <div class="mb-6">
            <label for="tags" class="inline-block text-lg mb-2">Location of Vehicle</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location" />
        </div>
        <!-wanjala add your code here for tracking-->
        <button type="submit" class="bg-blue-500 text-white rounded py-2 px-4 hover:bg-blue-600">
            Submit
        </button>

    </form>
</div>    
@endsection