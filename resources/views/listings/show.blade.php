@extends('layout')

@section('content')

@include('partials._search')

<a href="{{ route('landing') }}" class="inline-block text-black ml-4 mb-4"
><i class="fa-solid fa-arrow-left"></i> Back to listings
</a>
<div class="mx-4">
<div class="bg-gray-50 border border-gray-200 p-10 rounded">
    <div
        class="flex flex-col items-center justify-center text-center"
    >
        <img
            class="w-48 mr-6 mb-6"
            src="{{asset('images/no-image.png')}}" alt="">

        <h3 class="text-2xl mb-2">{{$listing->title}}</h3>
        <div class="text-xl font-bold mb-4">{{$listing->company}}</div>
        <ul class="flex">
            <li
                class="bg-black text-white rounded-xl px-3 py-1 mr-2"
            >
                <a href="#">Accident History</a>
            </li>
            <li
                class="bg-black text-white rounded-xl px-3 py-1 mr-2"
            >
                <a href="#">Maintenance History</a>
            </li>
            <li
                class="bg-black text-white rounded-xl px-3 py-1 mr-2"
            >
                <a href="#">Driver Historssy</a>
            </li>
            <li
                class="bg-black text-white rounded-xl px-3 py-1 mr-2"
            >
                <a href="#">Ownership History</a>
            </li>
        </ul>
        <div class="text-lg my-4">
            <i class="fa-solid fa-location-dot"></i>{{$listing->location}}</div>
        <div class="border border-gray-200 w-full mb-6"></div>
        <div>
            <h3 class="text-3xl font-bold mb-4">
               {{$listing->tags}}
            </h3>
            <div class="text-lg space-y-6">
             {{$listing->Description}}
                <a
                    href="mailto:{{$listing->email}}"
                    class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"
                    ><i class="fa-solid fa-envelope"></i>
                    Contact underwriter</a
                >
                <a
                    href="https://iba.co.ke"
                    target="_blank"
                    class="block bg-black text-white py-2 rounded-xl hover:opacity-80"
                    ><i class="fa-solid fa-globe"></i> Visit Website</a>
            </div>
        </div>
    </div>
</div>
</div>
<x-card class="mt-4 p-2 flex space-x-6">
    <a href="{{ route('listings.edit', $listing->id) }}" class="text-blue-500">
        <i class="fa-solid fa-pencil"></i>Edit
    </a>

    <form method="POST" action="{{ route('listings.destroy', $listing->id) }}">
      @csrf
      @method('DELETE')
      <button class="text-red-500"><i class="fa-solid fa-trash"></i>DELETE</button>
    </form>

</x-card>
@endsection
