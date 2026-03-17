@extends('layouts.app')

@section('content')
    <div class="homepage-image-1-row d-flex justify-content-center position-relative d-inline-block">
        <img src="/images/pozahomepage3.png" class="img-fluid img-thumbnail" alt="...">
        <div class="position-absolute top-50 start-50 translate-middle text-white fw-bold">
            {{-- <h1>Salvați Animalele Baia Mare</h1>
            <p>Luptăm zilnic pentru a salva câini abandonați și pentru a le reda
                demnitatea, speranța și o familie.</p> --}}
        </div>
</div>

    <div class="container px-4 py-5" id="hanging-icons">
        {{-- <h2 class="pb-2 border-bottom">Hanging icons</h2> --}}
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">

            @include('partials.feature', [
                'title' => 'Despre noi',
                'subtitle' => 'Cine suntem și cum ajutăm',
                'icon' => 'house-heart',
                'url' => 'about',
            ])

            @include('partials.feature', [
                'title' => 'Adoptă',
                'subtitle' => 'Oferă unui câine o familie',
                'icon' => 'house-heart-fill',
                'url' => 'adopt',
            ])

            @include('partials.feature', [
                'title' => 'Foster',
                'subtitle' => 'Găzduire temporară pentru câini',
                'icon' => 'shield-fill-check',
                'url' => 'foster',
            ])
        </div>
    </div>

    {{-- <div class="b-example-divider"></div> --}}

    <hr class="featurette-divider" />

    @include('partials.hero-image-left', [
        'title' => 'Bine ai venit la SalvatiAnimalele.ro!',
        'text' => 'Credem că animalele nu sunt invizibile și că fiecare dintre noi poate face o
                            diferență. Luptăm zilnic pentru a atrage atenția asupra suferinței câinilor fără
                            stăpân, pentru a încuraja adopția și pentru a oferi o a doua șansă celor care
                            au cunoscut doar abandonul și durerea.',
        'image' => 'pozahomepage2.jpg',
    ])

    @include('partials.hero-image-center', [
        'title' => 'Află mai multe despre noi...',
        'text' => 'Ne dorim o comunitate mai responsabilă și un viitor în care niciun animal să
                            nu mai fie lăsat în urmă.',
        'image' => 'pozahomepage3.png',
        'url' => '/about',
         'blank' => false,
    ])

    {{-- <hr class="featurette-divider" /> --}}

    <div class="container px-4 py-5" id="hanging-icons">
        <h1 class="pb-2">Cum ne poți ajuta? Împreună putem face diferența</h2>
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">

                @include('partials.feature', [
                    'title' => 'Donează',
                    'subtitle' => 'Fiecare donație salvează o viață',
                    'icon' => 'cash',
                    'url' => 'donate',
                ])

                @include('partials.feature', [
                    'title' => 'Salvează',
                    'subtitle' => 'Ajută direct un câine din adăpost',
                    'icon' => 'person-raised-hand',
                    'url' => 'sponsor',
                ])

                @include('partials.feature', [
                    'title' => 'Voluntariat',
                    'subtitle' => 'Dăruiește timp și oferă speranță',
                    'icon' => 'piggy-bank',
                    'url' => '',
                ])
            </div>
    </div>

    <hr class="featurette-divider" />

    <h1 class="pb-2">Le mulțumim companiilor și organizațiilor ne susțin!</h2>

    <div class="row mb-4">
        <div class="col d-flex justify-content-center">
            <img src="/images/herz.png" class="img-fluid img-thumbnail" alt="herz" width="100" height="100">
        </div>

        <div class="col d-flex justify-content-center"><img src="/images/pet_crew.jpg" class="img-fluid img-thumbnail"
                alt="pet crew" width="100" height="100"></div>

        <div class="col d-flex  justify-content-center"><img src="/images/fam_dogs.jpg" class="img-fluid img-thumbnail"
                alt="fam dogs" width="100" height="100"></div>
    </div>

    <div class="row">
        <div class="col d-flex justify-content-center">
            <img src="/images/pets_rescue.png" class="img-fluid img-thumbnail" alt="pet rescue" width="100"
                height="100">
        </div>

        <div class="col d-flex justify-content-center">
            <img src="/images/sepultura.png" class="img-fluid img-thumbnail" alt="sepultura" width="100" height="100">
        </div>

        <div class="col d-flex justify-content-center">
            <img src="/images/aramis.jpg" class="img-fluid img-thumbnail" alt="aramis" width="100" height="100">
        </div>
    </div>
@endsection
