<!doctype html>
<html lang="en">

<head>
    <title>Novinky</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <!-- navigace zde neni napevno v kodu-->
    @include('includes.navbar')

    <!-- obsah -->
    @yield('content')

    <h2 style="text-align: center; font-weight:bold; color:white; background:darkorange">Vítejte v našem e-shopu</h2>

    <div class="jumbotron p-4 p-md-3">
        <div class="container">
            <p style="font-size: 35px; font-weight:bold; align-items:center">CHCEŠ APPLE PRODUKTY ZA ZVÝHODNĚNÉ CENY?</p>
        </div>
    </div>

    <div class="container">
        <li style="font-size:120%" class="pb-1 mb-2 border-bottom">a nemáme na mysli slevu pár korun!</li>
    </div>

    <div class="container">
        <li style="font-size:120%" class="pb-1 mb-2 border-bottom">nejnovější modely iPhonů, iPadů, Maců, iMaců, Airpods, Apple watchek,... můžeš mít doma i o tisíce korun levněji!
        </li>
    </div>

    <div style="align-items:center;" class="jumbotron p-4 p-md-3 text-white rounded bg-dark">
        <div class="container">
            <p style="align-items: center; color: white; font-size: 27px" class="display-4">PRACUJEŠ JAKO ŘEDITEL, SKLADNÍK NEBO PRODAVAČ, ... V iStores nebo iWant Česko?</p>
        </div>
    </div>


    <div class="container">
        <h3 style="font-size:120%" class="pb-1 mb-2 border-bottom">
            - vyslyšeli jsme přání tisíců zaměstnanců po celém Česku!
        </h3>
    </div>

    <div class="container">
        <h3 style="font-size:120%" class="pb-1 mb-2 border-bottom">
            - jsme první český benefitní e-shop s Apple produkty pro zaměstnance!
        </h3>
    </div>

    <div class="container">
        <h3 style="font-size:120%" class="pb-1 mb-2 border-bottom">
            - na všechny zakoupené produkty se vztahuje standartní záruka 24 měsíců a autorizovaný servis!
        </h3>
    </div>

    <div class="jumbotron p-4 p-md-3">
        <div class="container">
            <p style="font-size: 35px; font-weight:bold; color:black">JSI NA SPRÁVNÉ ADRESE!</p>
        </div>
    </div>

    <div class="container">
        <h3 style="font-size:120%" class="pb-1 mb-2 border-bottom"><a style="background: green; border:none; border-radius:0%" href="{{ route('produkty.index') }}" class="btn btn-primary">Zobrazit aktuální nabídku produktů</a>
        </h3>
    </div>

    <div class="container">
        <h3 style="font-size:120%" class="pb-1 mb-2 border-bottom"><a style="background: green; border:none; border-radius:0%" href="{{ route('JakNakoupit.index') }}" class="btn btn-primary">Informace potřebné k nákupu na našem e-shopu</a>
        </h3>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>