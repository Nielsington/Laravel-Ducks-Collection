@extends('layout')
@section('header')
<header>
    <h4 class="text-center text-[2.5rem]">ABOUT PAGE</h4>
</header>
@endsection

@section('nav')
<nav>
    <ul class="list-disc ml-8">
        <li><a class="text-zinc-50" href="{{route('home')}}">Homepage</a></li>
        <li><a class="text-zinc-50" href="{{route('contact')}}">Contact page</a></li>
        <li><a class="text-zinc-50" href="{{route('product')}}">Product page</a></li>
    </ul>
</nav>
@endsection
