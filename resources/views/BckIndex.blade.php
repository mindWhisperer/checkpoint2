<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Novinky</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico">

</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img class="logo" src="img/knihy.png" alt="knihy"/></a>
            <div class="navbar-nav">
                <a class="nav-link" href="index.html">Novinky</a>
                <a class="nav-link" href="stalice.blade.php">Stalice</a>
                <a class="nav-link" href="pridat.blade.php">Pridať knihu</a>
            </div>
        </div>
    </nav>

</header>
<main>
    <div>
        @foreach($books as $book)
            <h1>{{$book->nazov}}</h1>
        @endforeach
    </div>

    <div class="riadok">
        <div class="col-lg-6 textos">
            <button type="button" class="btn btn-outline-danger">Novinka</button>
            <button type="button" class="btn btn-outline-secondary">Čítať</button>
            <h2>Unsupervised</h2>
            <p>
                Mimi je mačka, která byla zvyklá na pozornost a péči svých majitelů.
                Jednoho dne ji však majitelé nechali samotnou doma, když odjeli na dovolenou.
                Na začátku se Mimi chovala klidně, ale postupně se začala nudil a chtěla pozornost.
                Začala hrát s různými věcmi po domě, včetně květin, toaletního papíru a provázků.
                Nakonec zkusila chytit rybu v akváriu. Když se majitelé vrátili, zjistili, že Mimi způsobila nepořádek,
                ale pochopili, že to dělala z osamělosti. Dali jí náležitou pozornost a Mimi byla znovu šťastná.
                Příběh nám připomíná důležitost péče a společnosti pro domácí zvířata, a jak mohou reagovat, když
                zůstanou samy.
            </p>
        </div>

        <div class="col-lg-6 obrazok">
            <img src="img/unsupervised.jpeg" alt="unsupervised"/>
        </div>
    </div>

    <div class="riadok">
        <div class="col-lg-6 textos">
            <button type="button" class="btn btn-outline-danger">Novinka</button>
            <button type="button" class="btn btn-outline-secondary">Čítať</button>
            <h2>Pumpkin spice never dies</h2>
            <p>
                V příběhu "Pumpkin Spice nikdy neumírá" se odehrává v městě Autumnville,
                kde je nápoj Pumpkin Spice symbolem podzimní radosti a pohody. Hlavní postavou je Lily,
                která má zvláštní vztah k tomuto nápoji. Každý rok, kdy se Pumpkin Spice objeví, pro ni
                znamená zvláštní okamžik štěstí. <br>

                Však jednoho roku nastane problém, když začne Pumpkin Spice nevysvětlitelně mizet ze
                všech kaváren v městě. Lily se rozhodne vyšetřit tuto záhadu a zjistit, co se děje.
                Společně s přáteli odhalí, že šéfkuchař v místní kavárně se pokouší ovládnout recept na
                Pumpkin Spice a změnit ho na něco nebezpečného. <br>

                S odhodláním a odvahou Lily Pumpkin Spice zachrání, zachovávajíc tradici a podzimní kouzlo
                pro celé město Autumnville. Příběh zdůrazňuje důležitost tradic, odvahy a sílu, kterou může
                mít jediný nápoj na lidské srdce, když je spojen s láskou a společenstvím.
            </p>
        </div>
        <div class="col-lg-6 obrazok">
            <img src="img/pumpkin_spice_never_dies.jpeg" alt="pumpkin spice never dies"/>
        </div>
    </div>

    <div class="riadok">
        <div class="col-lg-6 textos">
            <button type="button" class="btn btn-outline-danger">Novinka</button>
            <button type="button" class="btn btn-outline-secondary">Čítať</button>
            <h2>The return of Vampurr</h2>
            <p>
                "The return of Vampurr" je příběh z tajemného města Furrendale, ve kterém kolovala legenda o záhadném
                Vampurrovi,
                upírovi v kočičím těle. Po dlouhých letech neexistence se Vampurr náhle objevuje znovu, přinášejíce
                tajemství
                a vzrušení do města. Tentokrát se však nevrací jen pro zábavu. Má nový úkol - chránit město před
                rostoucím nebezpečím.
                Vampurr se stává městským hrdinou, který se vydává na dobrodružnou misi, aby ochránil své kočičí
                spoluobyvatele.
                Během noci plné tajemství a napětí se Vampurr stává symbolem ochrany a nekonečného charmu.
            </p>
        </div>
        <div class="col-lg-6 obrazok">
            <img src="img/vampurr.jpeg" alt="the return of vampurr"/>
        </div>
    </div>


</main>

<footer class="py-5">
    <div class="row">
        <div class="col-6 col-md-2 mb-3">
            <h5>Knižôčka</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Domov</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0">O spoločnosti</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0">FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Pridanie knihy</a></li>
            </ul>
        </div>
    </div>

    <div class="d-flex flex-column flex-sm-row justify-content-center py-4 my-4 border-top">
        <p>© 2023 Knižôčka, Inc.</p>
    </div>
</footer>


</body>
</html>
