<!doctype html>
<html lang="en">

<head>
    <title>Kontakt</title>
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

    <h2 style="text-align: center; font-weight:bold; color:white; background:darkorange">Kontakt</h2>


    <div class="jumbotron p-4 p-md-3">
        <div class="container">
            <a style="font-size:240%; color:black; font-weight:bold" href="mailto: apple.obchod@icloud.com">apple.obchod@icloud.com</a>
            <a style="font-size:240%; color:darkorange"> / </a>
            <a style="font-size:240%; color:black; font-weight:bold" href="tel:+420-775-072-545">+420 775 072 545</a>
            <p class="lead my-3">Neváhejte nám napsat nebo zavolat! Jsme tu pro Vás PO - PÁ 7:00 - 16:30</p>
        </div>
    </div>



    <div class="container">
        <p style="font-weight: bold; font-size:120%">CHCI NOVÝ APPLE PRODUKT Z VAŠEHO E-SHOPU:</p>
        <li>Splňujete <a style="border:none; border-radius:0%; color:green" href="{{ route('JakNakoupit.index') }}">podmínky k nákupu z našeho e-shopu?</a></li>
        <br></br>
        <p style="font-weight: bold; font-size:120%">Zašlete nám objednávku, která bude obsahovat:</p>
        <li>Jméno</li>
        <li>Příjmení</li>
        <li>telefon/email</li>
        <li>adresa trvalého bydliště</li>
        <li>iStores/iWant a pozice, ve které aktuálně pracujete</li>
        <li>Vaše identifikační číslo zaměstnance</li>
        <li>Model, barva, vnitřní paměť, cena Vámi vybraného produktu <a style="background: green; border:none; border-radius:0%" href="{{ route('produkty.index') }}" class="btn btn-primary">Aktuální nabídka produktů</a></li>
        <li>Vaše poznámka k objednávce</li>
        <li>způsob platby, který jste si vybrali. Můžete zaplatit následujícími způsoby: <a style="background: black; border:none; border-radius:0%" href="{{ route('JakNakoupit.index') }}" class="btn btn-primary">Vše o nákupu - způsoby platby</a></li>
        <br></br>
        <p style="font-weight: bold; color:darkorange">Objednávku zašlete na e-mail: <a style="color:black; font-weight:bold;" href="mailto: apple.obchod@icloud.com">apple.obchod@icloud.com </a></p>
        <br></br>
        <p style="font-weight: bold; color:darkorange">Nebo písemně na adresu:</p>
        <p> Apple obchod s.r.o</p>
        <p> Vysocká 218</p>
        <p> 120 00, Praha 2</p>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>