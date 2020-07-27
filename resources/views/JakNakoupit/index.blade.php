<!doctype html>
<html lang="en">

<head>
    <title>Vše o nákupu</title>
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

    <h2 style="text-align: center; font-weight:bold; color:white; background:darkorange">Základní informace o nákupu</h2>

    <div class="jumbotron p-4 p-md-3">
        <div class="container">
            <p style="font-size: 35px; font-weight:bold; align-items:center;">Chci nové Apple zařízení z Vašeho e-shopu! Jak na to?</p>
            <p class="lead my-3">Níže jsou základní požadavky nezbytné pro nákup elektroniky z našeho e-shopu:</p>
        </div>
    </div>






    <div class="container">
        <h3 style="font-size:120%" class="pb-1 mb-2 border-bottom">
            - jsem zaměstnancem iStores Česko nebo iWant Česko
        </h3>
    </div>
    <div class="container">
        <h3 style="font-size:120%" class="pb-1 mb-2 border-bottom">
            - je mi více než 18 let
        </h3>
    </div>
    <div class="container">
        <h3 style="font-size:120%" class="pb-1 mb-2 border-bottom">
            - jsem zaměstnancem více než 1 rok
        </h3>
    </div>
    <div class="container">
        <h3 style="font-size:120%" class="pb-1 mb-2 border-bottom">
            - Hurá! Splňuješ všechny podmínky <a style="background: green; border:none; border-radius:0%" href="{{ route('produkty.index') }}" class="btn btn-primary">Zobrazit aktuální nabídku produktů</a>
        </h3>
    </div>
    <div class="container">
        <h3 style="font-size:120%" class="pb-1 mb-2 border-bottom">
            - Máte vybráno? <a style="background: black; border:none; border-radius:0%" href="{{ route('kontakt.index') }}" class="btn btn-primary">Chci zaslat objednávku!</a>
        </h3>
    </div>

    <div class="jumbotron p-4 p-md-3">
        <div class="container">
            <p style="font-size: 35px; font-weight:bold; align-items:center;">Způsoby platby</p>
            <p class="lead my-3">VAŠI OBJEDNÁVKU MŮŽETE ZAPLATIT NÁSLEDUJÍCÍMI ZPŮSOBY:</p>
        </div>
    </div>


    <div class="container">
        <h3 class="pb-2 mb-4 border-bottom">
            1) DOBÍRKA
        </h3>

        <p> Nejběžněji používaná platební metoda v České republice. Objednávku zaplatíte při převzetí zásilky od zaměstnance České pošty nebo pracovníka společnosti Geis. Dobírka je zpoplatněna částkou 40,- Kč při dopravě Českou poštou a Geis.</p>
        <p style="font-weight:bold">Důležité upozornění:</p>
        <p>Dopravní společnosti v těchto dnech zavedly opatření pro snížení rizika přenosu viru. Jedná se o okamžitý zákaz veškerých hotovostních transakcí. Veškeré zásilky na dobírku je tak možné uhradit kurýrovi pouze platební kartou. Děkujeme za pochopení. </p>
    </div>
    <div class="container">
        <h3 class="pb-2 mb-4 border-bottom">
            2) BANKOVNÍ PŘEVOD
        </h3>

        <p> Platbu můžete uskutečnit předem převodem peněz na náš bankovní účet. Po odeslání objednávky Vám budou e-mailem zaslány údaje potřebné k převodnímu příkazu: částka, číslo účtu, variabilní symbol. Po provedení platby jsou peníze na náš účet připsány obvykle během 1 - 3 pracovních dní.</p>
        <p> Zboží odesíláme v rozmezí 1 - 5 pracovních dnů od přijetí Vaší platby. Při převzetí zásilky od České pošty nebo společnosti Geis pak již nic neplatíte.</p>
    </div>
    <div class="container">
        <h3 class="pb-2 mb-4 border-bottom">
            3) HOTOVĚ/KARTOU PŘI OSOBNÍM ODBĚRU
        </h3>

        <p> Při osobním odběru ve vybrané prodejně Apple obchodu pro zaměstnance je možné platit hotově nebo platební kartou.</p>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>