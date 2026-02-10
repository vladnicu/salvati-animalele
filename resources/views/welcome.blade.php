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

    <div class="row mt-4">
        <div class="col d-flex justify-content-between">
            <button type="button" class="btn btn-danger">Foster - găzduire
                temporară pentru câini</button>
            <button type="button" class="btn btn-danger">Sponsorizează un
                câine</button>
            <button type="button" class="btn btn-danger">Fă o donație</button>
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

    <div class="row mt-4 difference-text">
        <div class="col d-flex justify-content-center">
            <h1>Cum ne poți ajuta
                Împreună putem face diferența</h1>
        </div>
    </div>

    <div class="row py-5 px-2 difference-options d-flex">
        <div class="col d-flex flex-column align-items-center justify-content-center">
            <h3>Donează și schimbă o viață</h3>
            <button type="button" class="btn btn-outline-light">Donează acum</button>
        </div>

        <div class="col d-flex flex-column align-items-center justify-content-center">
            <h3>Implică-te ca voluntar</h3>
            <button type="button" class="btn btn-outline-light">Informații voluntariat</button>
        </div>
        <div class="col d-flex flex-column align-items-center justify-content-center">
            <h3>Sponsorizează un câine</h3>
            <button type="button" class="btn btn-outline-light">Devino sponsor</button>
        </div>
    </div>
@endsection
