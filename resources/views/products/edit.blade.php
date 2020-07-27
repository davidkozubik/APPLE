@extends('layouts.adminLayout')
@section('content')

<h2 style="text-align: center; font-weight:bold; color:white; background:darkorange">Upravit produkt:</h2>
<div style="width: 40%; height:40%" class="container-fluid">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="POST" action="{{route('produkty.update', ['$id' => $product['id']])}}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label style="font-weight: bold;" for="vyrobce">Výrobce:</label>
            <input value="{{ $product->vyrobce }}" style="border-radius: 0%;" type="text" class="form-control" name="vyrobce" id="vyrobce" aria-describedby="helpId" placeholder="">
        </div>
        <div class="form-group">
            <label style="font-weight: bold;" for="model">Model:</label>
            <input value="{{ $product->model }}" style="border-radius: 0%;" type="text" class="form-control" name="model" id="model" aria-describedby="helpId" placeholder="">
        </div>
        <div class="form-group">
            <label style="font-weight: bold;" for="barva">Barva:</label>
            <input value="{{ $product->barva }}" style="border-radius: 0%;" type="text" class="form-control" name="barva" id="barva" aria-describedby="helpId" placeholder="">
        </div>
        <div class="form-group">
            <label style="font-weight: bold;" for="pamet">Interní paměť:</label>
            <input value="{{ $product->pamet }}" style="border-radius: 0%;" type="text" class="form-control" name="pamet" id="pamet" aria-describedby="helpId" placeholder="">
        </div>

        <div class="form-group">
            <label style="font-weight: bold;" for="popis">Popis:</label>
            <input value="{{ $product->popis }}" style="border-radius: 0%;" type="text" class="form-control" name="popis" id="popis" aria-describedby="helpId" placeholder="">
            <small id="helpId" class="form-text text-muted">například: procesor, distribuce, fotoaparát...</small>
        </div>

        <div class="form-group">
            <label style="font-weight: bold; color:green" for="cena">Cena:</label>
            <input value="{{ $product->cena }}" style="border-radius: 0%;" type="text" class="form-control" name="cena" id="cena" aria-describedby="helpId" placeholder="">
            <small id="helpId" class="form-text text-muted">Hodnota v Kč</small>
        </div>

        <button style="border: none; border-radius:0%" type="submit" class="btn btn-dark">Uložit produkt</button>
    </form>
</div>
@endsection