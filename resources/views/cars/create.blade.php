


@extends('layouts.app')

@section('content')
<div class="m-auto w-4/5 py-24">
    <div style="text-align:center;"> <br>
        <h1 class="text-5xl uppercase bold">
            Create car

        </h1>

    <div class="flex justify-align:center; pt-20">
    <div style="text-align:center;">
        <form action="/cars" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="block">
               <input
                type="file"
                class="block shadow-5xl mb-10 p-2 w-80 italic
                placeholder-gray-400"
                name="image">

                <br>
                <br>
                <input
                type="text"
                class="block shadow-5xl mb-10 p-2 w-80 italic
                placeholder-gray-400"
                name="name"
                placeholder="Brand name....">

                <br>
                <input
                type="text"
                class="block shadow-5xl mb-10 p-2 w-80 italic
                placeholder-gray-400"
                name="founded"
                placeholder="Founded....">

                <br>
                <input
                type="text"
                class="block shadow-5xl mb-10 p-2 w-80 italic
                placeholder-gray-400"
                name="description"
                placeholder="Description....">


                <br>

                <button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-80
                uppercase font-bold">
                    Submit
                </button>

            </div>
        </form>

        @if ($errors->any())
            <div class="w-4/8 m-auto text-ceneter">
                @foreach ($errors->all() as $error)
                    <li class="text-red-500 list-none">
                        {{ $error }}
                    </li>
                @endforeach
                </div>
@endif
@endsection
