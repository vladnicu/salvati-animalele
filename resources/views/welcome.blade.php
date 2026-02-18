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
        {{-- <h2 class="pb-2 border-bottom">Hanging icons</h2> --}}
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">

            @include('partials.feature', [
                'title' => 'Foster',
                'subtitle' => 'Găzduire temporară pentru câini',
                'icon' => 'house-heart',
                'url' => 'foster',
            ])

            @include('partials.feature', [
                'title' => 'Sponsorizează',
                'subtitle' => 'Sponsorizează un câine și oferă-i o șansă la o viață mai bună',
                'icon' => 'cash',
                'url' => 'sponsor',
            ])

            @include('partials.feature', [
                'title' => 'Doneaza',
                'subtitle' => 'Donează și schimbă o viață',
                'icon' => 'piggy-bank',
                'url' => 'donate',
            ])
        </div>
    </div>

    <hr class="featurette-divider" />

    @include('partials.hero-image-left', [
        'title' => 'Bine ai venit la SalvatiAnimalele.ro!',
        'text' => 'Credem că animalele nu sunt invizibile și că fiecare dintre noi poate face o
                diferență. Luptăm zilnic pentru a atrage atenția asupra suferinței câinilor fără
                stăpân, pentru a încuraja adopția și pentru a oferi o a doua șansă celor care
                au cunoscut doar abandonul și durerea.',
        'image' => 'Poza homepage 2.jpg',
    ])

    @include('partials.hero-image-center', [
        'title' => 'Află mai multe despre noi...',
        'text' => 'Ne dorim o comunitate mai responsabilă și un viitor în care niciun animal să
                nu mai fie lăsat în urmă.',
        'image' => 'cosmo2.jpg',
    ])

    {{-- <hr class="featurette-divider" /> --}}

    <div class="container px-4 py-5" id="hanging-icons">
        <h2 class="pb-2 border-bottom">Cum ne poți ajuta? Împreună putem face diferența</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">

            @include('partials.feature', [
                'title' => 'Donează',
                'subtitle' => 'Donează  și schimbă o viață',
                'icon' => 'cash',
                'url' => 'donate',
            ])

            @include('partials.feature', [
                'title' => 'Voluntariat',
                'subtitle' => 'Implică-te ca voluntar',
                'icon' => 'person-raised-hand',
                'url' => '',
            ])

            @include('partials.feature', [
                'title' => 'Sponsorizează',
                'subtitle' => 'Sponsorizează un câine și oferă-i o șansă la o viață mai bună',
                'icon' => 'piggy-bank',
                'url' => 'sponsor',
            ])
        </div>
    </div>

    <hr class="featurette-divider" />

    <div class="row mb-4">
        <div class="col d-flex  justify-content-center"><img src="{{ Vite::asset('resources/images/fam_dogs.jpg') }}"
                class="img-fluid img-thumbnail" alt="fam dogs" width="100" height="100"></div>
        <div class="col d-flex justify-content-center">
            <img src="{{ Vite::asset('resources/images/aramis.jpg') }}" class="img-fluid img-thumbnail" alt="aramis"
                width="100" height="100">
        </div>
        <div class="col d-flex justify-content-center">
            <img src="{{ Vite::asset('resources/images/herz.png') }}" class="img-fluid img-thumbnail" alt="herz"
                width="100" height="100">
        </div>
    </div>

    <div class="row">
        <div class="col d-flex justify-content-center"><img src="{{ Vite::asset('resources/images/pet_crew.jpg') }}"
                class="img-fluid img-thumbnail" alt="pet crew" width="100" height="100"></div>
        <div class="col d-flex justify-content-center">
            <img src="{{ Vite::asset('resources/images/pets_rescue.png') }}" class="img-fluid img-thumbnail"
                alt="pet rescue" width="100" height="100">
        </div>
        <div class="col d-flex justify-content-center">
            <img src="{{ Vite::asset('resources/images/sepultura.png') }}" class="img-fluid img-thumbnail" alt="sepultura"
                width="100" height="100">
        </div>
    </div>
@endsection
