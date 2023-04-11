@extends('layout')
<h4 class="text-center text-[3rem]">PRODUCT PAGE</h4>
<x-navigation />

@section('content')
<div class="w-[70%] m-auto">
    <h6 class="text-[1.2rem] text-[#CFE031] font-bold text-center">{{$product->Theme}}</h6>
    <p class="text-[#FFFFFF]">Price: {{$product->Price}}</p>
    <p class="text-[#FFFFFF]">Rarity: {{$product->Rarity}}</p>
    <p class="text-[#FFFFFF]">Color: {{$product->Color}}</p>
    <p class="text-[#FFFFFF]">Manufacturer: {{$product->Manufacturer}}</p>
</div>
@endsection