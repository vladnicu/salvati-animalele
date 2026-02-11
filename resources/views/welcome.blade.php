@extends('layouts.app')

@section('content')
    <div class="homepage-image-1-row d-flex justify-content-center position-relative d-inline-block">
        <img src="{{ Vite::asset('resources/images/Poza homepage 1.png') }}" class="img-fluid img-thumbnail" alt="...">
        <div class="position-absolute top-50 start-50 translate-middle text-white fw-bold">
            <h1>Salvați Animalele Baia Mare</h1>
            <p>Luptăm zilnic pentru a salva câini abandonați și pentru a le reda
                demnitatea, speranța și o familie.</p>
        </div>
    </div>

    <div class="container px-4 py-5" id="hanging-icons">
        <h2 class="pb-2 border-bottom">Hanging icons</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">

            @include('partials.feature', [
                'title' => 'Foster',
                'subtitle' => 'Găzduire temporară pentru câini',
                'icon' => 'house-heart',
            ])
            
            @include('partials.feature', [
                'title' => 'Sponsorizează',
                'subtitle' => 'Sponsorizează un câine și oferă-i o șansă la o viață mai bună',
                'icon' => 'cash',
            ])

            @include('partials.feature', [
                'title' => 'Doneaza',
                'subtitle' => 'Donează și schimbă o viață',
                'icon' => 'piggy-bank',
            ])
        </div>
    </div>

    <hr class="featurette-divider" />
    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading fw-normal lh-1">
                Bine ai venit la
                <span class="text-body-secondary">SalvatiAnimalele.ro!</span>
            </h2>
            <p class="lead">
                Credem că animalele nu sunt invizibile și că fiecare dintre noi poate face o
                diferență. Luptăm zilnic pentru a atrage atenția asupra suferinței câinilor fără
                stăpân, pentru a încuraja adopția și pentru a oferi o a doua șansă celor care
                au cunoscut doar abandonul și durerea.
            </p>
            <p class="lead">
                Ne dorim o comunitate mai responsabilă și un viitor în care niciun animal să
                nu mai fie lăsat în urmă.
            </p>
            <button type="button" class="btn btn-primary">Află mai multe despre noi...</button>
        </div>
        <div class="col-md-5 order-md-1">
            <img src="{{ Vite::asset('resources/images/Poza homepage 2.jpg') }}" class="featurette-image img-fluid mx-auto"
                width="500" height="500" alt="Bine ai venit">

        </div>
    </div>

    <hr class="featurette-divider" />
    <div class="container px-4 py-5" id="hanging-icons">
        <h2 class="pb-2 border-bottom">Cum ne poți ajuta? Împreună putem face diferența</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">

            @include('partials.feature', [
                'title' => 'Donează',
                'subtitle' => 'Donează  și schimbă o viață',
                'icon' => 'cash',
            ])
            
            @include('partials.feature', [
                'title' => 'Voluntariat',
                'subtitle' => 'Implică-te ca voluntar',
                'icon' => 'person-raised-hand',
            ])

            @include('partials.feature', [
                'title' => 'Sponsorizează',
                'subtitle' => 'Sponsorizează un câine și oferă-i o șansă la o viață mai bună',
                'icon' => 'piggy-bank',
            ])
        </div>
    </div>

@endsection
