<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials/head')

</head>
<body>
<header>
    @include('partials/menu')
</header>
<main>
        <div class="riadok">
            <div class="col-lg-6 textos">
                <button type="button" class="btn btn-outline-danger">Novinka</button>
                <h2>{{$book->nazov}}</h2>
                <p>
                    {{$book->popis}}
                </p>
            </div>
            <div class="col-lg-6 obrazok">
                <img src={{$book->obrazok}} alt="unsupervised"/>
            </div>
        </div>
</main>

@include('partials/footer')
</body>
</html>
