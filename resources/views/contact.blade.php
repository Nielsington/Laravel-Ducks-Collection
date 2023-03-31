@extends('layout')
@section('header')
<header>
    <h4 class="text-center text-[3rem]">CONTACT PAGE</h4>
</header>
@endsection

@section('form')
<form action="{{route('handleForm')}}" method="POST" class="flex flex-col w-[20%] m-auto">
@csrf
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <label class="text-zinc-50" for="name">Name:</label>
    <input type="text" id="name" name="name">
    <label class="text-zinc-50" for="firstName">First name:</label>
    <input type="text" id="firstName" name="firstName">
    <label class="text-zinc-50" for="subject">Subject:</label>
    <input type="text" id="subject" name="subject">
    <label class="text-zinc-50" for="email">Email:</label>
    <input type="email" id="email" name="email">
    <label class="text-zinc-50" for="description">Describe your problem:</label>
    <textarea id="description" rows="4" cols="50" name="description"></textarea>
    <button class="mt-[2rem] border-2 border-yellow-800 bg-white rounded-full" type="submit">Submit ticket!</button>
</form>
@endsection