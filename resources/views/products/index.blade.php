@extends('layouts.adminLayout')
<style>
    ol {
        list-style-type: square;
        background: black;
        color: black;
        text-decoration-color: darkgrey;
        padding: 5px;
        width: 80%;
        margin-left: auto;
        margin-right: auto;

    }

    form {
        float: right;
    }
</style>
@section('content')
<h2 style="text-align: center; font-weight:bold; color:white; background:darkorange">Katalog produktů</h2>


<p style="text-align: center; font-size:large ">Pokud si nevíte rady, nebo potřebujete poradit s výběrem nového produktu, který Vám bude nejlépe vyhovovat, neváhejte nás
    <a style="background: black; border:none; border-radius:0%" href="{{ route('kontakt.index') }}" class="btn btn-primary">kontaktovat</a>
</p>

<div style="width: 60%; height:30%" class="container-fluid">
    <ul class="list-group">
        @foreach($products as $product)
        <li style="background-color:#E3E7EB  ; font-size: 150%; color:black; font-weight:bold; border:none; border-radius:0%" class="list-group-item">{{ $product->vyrobce }} {{ $product->model }}</li>
        <li class="list-group-item"> Barva: {{ $product->barva }}</li>
        <li class="list-group-item"> Paměť: {{ $product->pamet }}</li>
        <li class="list-group-item"> Popis: {{ $product->popis }}</li>
        <li style="color:green; font-weight:bold; font-size:130%" class="list-group-item"> Cena: {{ $product->cena }},- Kč</li>
        @auth
        <li class="list-group-item">
            <form method="get" class="edit_form" action="{{ action('ProduktyController@edit', [ '$id' => $product['id']]) }}">
                <button style="border:none; border-radius:0%" type="submit" class="btn btn-dark">Upravit produkt</button>
            </form>
            <form method="POST" action="{{ route('produkty.destroy',[ '$id' => $product['id']]) }}">
                @csrf
                @method('DELETE')
                <button style="border:none; border-radius:0%" type="submit" class="btn btn-danger"> Smazat produkt</button>
            </form>
        </li>
        <br></br>
        @endauth
        @endforeach
    </ul>
    <p style="text-align: center; font-size:large; font-weight:bold">Máte vybráno?
        <a style="background: darkorange; border:none; border-radius:0%" href="{{ route('kontakt.index') }}" class="btn btn-primary">Chci zaslat objednávku!</a>
    </p>

    @endsection