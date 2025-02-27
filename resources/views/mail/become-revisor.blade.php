<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Emporium Shop</title>
</head>

<body>
    <div class="container-fluid ">
        <div class="row p-5 vh-100 ">
            <h1 class="col-12 col-md-6 mx-5 mt-3 mb-1">Emporium Shop</h1>
            <h2 class="col-12 col-md-6 mx-5">Richiesta di Lavoro da {{ $user->name }}</h2>
            <p class="col-12 col-md-6 mx-5 mt-3 mb-1">Gentile Emporium Shop,</p>
            <p class="col-12 col-md-6 mx-5 mb-1">Mi chiamo{{ $user->name }} e sono molto interessato/a a lavorare con il
                vostro team come revisor.</p>
            <p class="col-12 col-md-6 mx-5 mb-1">
                Sarei molto grato/a se poteste prendere in considerazione la mia candidatura e, se necessario, sono
                disponibile per un colloquio o per fornire ulteriori informazioni.</p>
            <p class="col-12 col-md-6 mx-5">
                Vi ringrazio in anticipo per l'opportunità e resto a disposizione per qualsiasi chiarimento. Ecco i miei
                dati personali</p>
                <p class="col-12 col-md-6 mx-5">nome: {{ $user->name }}</p>
                <p class="col-12 col-md-6 mx-5">email: {{ $user->email }}</p>
                <p class="col-12 col-md-6 mx-5 mb-0">Distinti saluti,</p>
                <p class="col-12 col-md-6 mx-5 mb-1">{{ $user->name }}</p>
                <p class="col-12 col-md-7 mx-5">data e ora della richiesta: {{ \Carbon\Carbon::now()->format('d/m/Y H:i')}}</p>
                <p class="col-12 col-md-4 ms-5 mb-0 mt-2 ">Se vuoi renderlo/a revisor, clicca qui:</p>
            <div class="col-12 col-md-6 me-5 ">
                <a href="{{ route('make.revisor', compact('user')) }}" class="btn btn-primary rounded-2 fs-5 shadow w-50 py-2 ">Rendi revisor</a>
            </div>

        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</body>

</html>