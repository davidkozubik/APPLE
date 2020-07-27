@extends('layouts.adminLayout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div style="font-weight: bold;" class="card-header">Vítejte!</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    Byli jste úspěšně přihlášeni!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection