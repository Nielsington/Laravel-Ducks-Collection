@extends('layout')
@section('header')
<header>
    <h4 class="text-center text-[2.5rem]">HOME PAGE</h4>
</header>
@endsection

@section('nav')
<nav> 
    <ul class="list-disc ml-8">
        <li><a class="text-zinc-50" href="{{route('contact')}}">Contact page</a></li>
        <li><a class="text-zinc-50" href="{{route('product')}}">Product page</a></li>
        <li><a class="text-zinc-50" href="{{route('about')}}">About page</a></li>
    </ul>
</nav>
@endsection