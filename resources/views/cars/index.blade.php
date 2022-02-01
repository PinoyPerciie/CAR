{{-- @extends('layouts.app')


@section('content')
    <div class="m-auto w-4/5 py-24">
    <div class="text-center">
        <h1 class="text-5xl uppercase bold">
            CARS
        </h1>
        </div>
    </div>

@endsection --}}




@extends('layouts.app')

{{-- @foreach ($cars as $car)
    {{ $car->name }}
@endforeach --}}

@section('content')

    <div class="m-auto w-4/5 py-24">
        <div style="text-align:center;"> <br>
        <h1 class="text-5xl uppercase bold">
            Cars

        </h1>
    </div>

    @if (Auth::user())
    <div class="pt-10">
        <a
        href="cars/create"
        class="border-b-2 pb-2 border-dotted italic text-gray-500">
        Add new car &rarr;
    </a>
    </div>

    @else
    <p class="py-12 italic">
        Please Login to add a new car.
    </p>

    @endif



    <br>

<div class="w-5/6 py-10">
        @foreach ($cars as $car)
        <div class="m-auto">
            @if (isset(Auth::user()->id) && Auth::user()->id == $car->user_id)

            @endif
            {{-- <div class="float-right"> --}}
                <p style="text-align:right;">

                @csrf
                @method('edit')
                <a
                type="submit"
                class="border-b-2 pb-2 border-dotted italic
                text-green-500"
                href="cars/{{ $car->id }}/edit">
                     Edit &rarr;
                    </a>

            </p>
                <form action="/cars/{{ $car->id }}" class="pt-3"
                method="POST">
                <p style="text-align:right;">
                    @csrf
                    @method('delete')
                    <button
                    type="submit"
                    class="border-b-2 pb-2 border-dotted italic text-red-500">
                        Delete &rarr;
                    </button>
                </p>
                </form>

            </div>
            <span class="uppercase text-blue-500 font-bold text-xs italic">
                Founded: {{ $car->founded }}
            </span>

            <h2 class="text-gray-700 text-5xl hover:text-gray-500">
                <a href="/cars/{{ $car->id }}">
                        {{ $car->name }}
                    </a>
            </h2>

            <p class="text-lg text-gray-700 py-6">
                        {{ $car->description }}
            </p>


            <hr class="mt-4 mb-8">
    </div>
       @endforeach
  </div>
</div>
@endsection
