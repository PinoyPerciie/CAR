@extends('layouts.app')

@section('content')
<div class="m-auto w-4/5 py-24">
    <div style="text-align:center;"> <br>
        <h1 class="text-5xl uppercase bold">
            Update car

        </h1>

    </div class="flex justify-align:center; pt-20">
        <form action="/cars/{{ $car->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="block">
                <input
                type="text"
                class="block shadow-5xl mb-10 p-2 w-80 italic
                placeholder-gray-400"
                name="name"
                value="{{ $car->name }}">

                <br>
                <input
                type="text"
                class="block shadow-5xl mb-10 p-2 w-80 italic
                placeholder-gray-400"
                name="founded"
                value="{{ $car->founded }}">

                <br>
                <input
                type="text"
                class="block shadow-5xl mb-10 p-2 w-80 italic
                placeholder-gray-400"
                name="description"
                value="{{ $car->founded }}">
                <br>

                <button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-80
                uppercase font-bold">
                    Submit

                </button>

            </div>
        </form>
@endsection
