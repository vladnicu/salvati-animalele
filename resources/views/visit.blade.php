@extends('layouts.app')

@section('content')
    @include('partials.page-title', [
        'title' => 'Viziteaza adapostul',
        'subtitle' => 'Adăpostul nostru este deschis vizitatorilor care doresc să cunoască câinii, să petreacă timp
                                    cu ei și să înțeleagă mai bine munca din spatele salvării lor.',
    ])
    
    <div class="row">
        <div class="col">
            <p>Adăpostul nostru poate fi vizitat doar cu programare în prealabil, pentru ca fiecare vizită să fie sigură,
                liniștită și benefică pentru câini.
                Poți veni singur sau în grup – cu prieteni, colegi, clase de elevi sau ca activitate educațională. Fiecare
                vizită este o lecție de empatie și grijă
                față de cei care nu se pot apăra singuri.
                Pentru câini, aceste vizite înseamnă mai mult decât joacă.
                În spațiul nostru verde, special amenajat, ei au șansa de a ieși din rutina adăpostului, de a primi atenție
                și de a se simți, măcar pentru o
                vreme, acasă. Uneori, câteva clipe de apropiere pot schimba complet starea unui câine.</p>
        </div>
    </div>

    <hr class="featurette-divider" />

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">
                Uneori, o simplă vizită poate fi cel mai frumos moment din ziua unui
                <span class="text-body-secondary">câine.</span>
            </h2>
            <p class="lead">
                Vizitele joacă un rol important în viața câinilor din adăpost. Interacțiunea cu oameni
                diferiți îi ajută să se socializeze, să capete încredere și să se obișnuiască cu prezența
                umană. Câinii care sunt mai relaxați și mai deschiși au șanse mai mari de a fi
                observați, înțeleși și, în cele din urmă, adoptați.
            </p>
        </div>
        <div class="col-md-5">
            <p>Câteva reguli simple pentru vizite:</p>
            <div class="alert alert-primary" role="alert">
                Accesul se face doar cu acordul personalului
            </div>
            <div class="alert alert-primary" role="alert">
                Respectăm indicațiile voluntarilor
            </div>
            <div class="alert alert-primary" role="alert">
                Nu hrănim câinii fără permisiune
            </div>
            <div class="alert alert-primary" role="alert">
                Copiii trebuie să fie însoțiți de adulți
            </div>
        </div>
    </div>

    <hr class="featurette-divider" />
@endsection
