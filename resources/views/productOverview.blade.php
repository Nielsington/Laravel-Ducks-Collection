@extends('layout')
<h4 class="text-center text-[3rem]">PRODUCT PAGE</h4>
<x-navigation />

@section('content')
<div class='products-wrapper'>
    @foreach($all_ducks as $duck)
            <div class='product-container'>
                <a href="/product/{{$duck->ID}}">{{$duck->Theme}}</a>
                <p>Price: {{$duck->Price}}</p>
            </div>
    @endforeach
</div>
@endsection