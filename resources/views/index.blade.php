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
    @foreach($books as $book)
        <div class="riadok">
            <div class="col-lg-6 textos">
                <button type="button" class="btn btn-outline-danger">Novinka</button>
                <a href="/detail/{{$book->id}}" class="btn btn-outline-secondary">Čítať</a>
                <h2>{{$book->nazov}}</h2>
                <p>
                    {{\Illuminate\Support\Str::limit($book->popis, 190, '...')}}
                </p>
            </div>
            <div class="col-lg-6 obrazok">
                <img src={{$book->obrazok}} alt="unsupervised"/>
            </div>
        </div>
    @endforeach
</main>

@include('partials/footer')


</body>
</html>
