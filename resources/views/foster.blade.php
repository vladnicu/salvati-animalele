@extends('layouts.app')

@section('content')
    @include('partials.page-title', [
        'title' => 'Foster - găzduire temporară pentru câini',
        'subtitle' => '',
    ])

    {{-- @include('partials.hero-image-left', [
        'title' => 'Foster – o șansă reală la viață pentru puii din adăpost',
        'text' => 'În fiecare zi, în adăpost ajung pui foarte mici și fragili — pui care nu ar trebui să lupte deja pentru supraviețuire.
    Pentru ei, mediul unui adăpost, oricât de bine organizat ar fi, vine cu un risc major: parvoviroza.
    ',
        'image' => 'Cosmo2.jpg',
    ]) --}}

    <hr class="featurette-divider" />

    @include('partials.featurette-list', [
        'titleprimary' => 'Foster – o șansă reală la viață pentru puii din adăpost',
        'titlesecondary' => 'adăpost.',
        'text' => 'În fiecare zi, în adăpost ajung pui foarte mici și fragili — pui care nu ar trebui să lupte deja pentru supraviețuire.
    Pentru ei, mediul unui adăpost, oricât de bine organizat ar fi, vine cu un risc major: parvoviroza.
    Parvoviroza este o boală extrem de gravă și foarte contagioasă, care se răspândește ușor acolo unde sunt mulți câini. Pentru un pui, mai ales unul care nu a finalizat schema de vaccinare, șansele de
    supraviețuire scad dramatic dacă rămâne în adăpost.',
        'listText' => 'De ce fosterul face diferența:',
        'listItems' => [
            'Este protejat de contactul direct cu alte animale bolnave',
            'Trăiește într-un spațiu curat, cald și liniștit',
            'Are timp să se întărească, să crească și să lupte',
            'Are șanse mult mai mari să supraviețuiască',
            'Pentru mulți dintre ei, fosterul nu este un „lux”, ci singura opțiune reală.',
        ],
    ])

    <hr class="featurette-divider" />

    @include('partials.featurette-list', [
        'titleprimary' => 'Ce înseamnă, de fapt, să fii ',
        'titlesecondary' => 'foster?',
        'text' => 'Fosterul înseamnă găzduire temporară. Nu este o adopție definitivă și nu presupune un angajament pe viață. Uneori sunt doar câteva săptămâni. Alteori, puțin mai mult.
Impactul, însă, este uriaș.',
        'listText' => 'Înseamnă să:',
        'listItems' => [
            'Oferi un loc sigur, chiar și pentru o perioadă scurtă',
            'Oferi căldură, atenție și o rutină zilnică',
            'Fii sprijinul unui pui până când finalizează schema de vaccinare',
            'Esti unui pui până când devine suficient de puternic',
            'Esti unui pui până când își găsește o familie definitivă'
        ],
    ])

    <hr class="featurette-divider" />

    @include('partials.featurette-list', [
        'titleprimary' => 'Ce înseamnă, de fapt, să fii ',
        'titlesecondary' => 'foster?',
        'text' => 'Fosterul înseamnă găzduire temporară. Nu este o adopție definitivă și nu presupune un angajament pe viață. Uneori sunt doar câteva săptămâni. Alteori, puțin mai mult.
Impactul, însă, este uriaș.',
        'listText' => 'Înseamnă să:',
        'listItems' => [
            'Oferi un loc sigur, chiar și pentru o perioadă scurtă',
            'Oferi căldură, atenție și o rutină zilnică',
            'Fii sprijinul unui pui până când finalizează schema de vaccinare',
            'Esti unui pui până când devine suficient de puternic',
            'Esti unui pui până când își găsește o familie definitivă'
        ],
    ])

    <hr class="featurette-divider" />

    <div class="row">
        <div class="col">
          
            <h5>Fosterul înseamnă găzduire temporară.</h5>
            <p>Fosterul înseamnă găzduire temporară.</p>
            <p>Nu este o adopție definitivă și nu presupune un angajament pe viață.</p>

            <div class="alert alert-primary" role="alert">
                oferi un loc sigur, chiar și pentru o perioadă scurtă
            </div>
            <div class="alert alert-primary" role="alert">
                oferi căldură, atenție și o rutină zilnică
            </div>
            <div class="alert alert-primary" role="alert">
                fii sprijinul unui pui până când:
                - finalizează schema de vaccinare
                - devine suficient de puternic
                - sau își găsește o familie definitivă
            </div>
            <div class="alert alert-primary" role="alert">
                Are șanse mult mai mari să supraviețuiască
                Pentru mulți dintre ei, fosterul nu este un „lux”, ci singura opțiune reală.
            </div>

            <p>Uneori sunt doar câteva săptămâni. Alteori, puțin mai mult.</p>
            <p>Impactul, însă, este uriaș.</p>

            <h5>Fosterul înseamnă găzduire temporară.</h5>
            <p>Mulți oameni își doresc să ajute, dar se tem că nu vor face față costurilor sau responsabilității. De aceea,
                vrem să fie foarte clar:</p>
            <p>Asociația Salvați Animalele asigură TOT ce este necesar:</p>
            <div class="alert alert-primary" role="alert">
                vaccinuri
            </div>
            <div class="alert alert-primary" role="alert">
                deparazitări
            </div>
            <div class="alert alert-primary" role="alert">
                mâncare
            </div>
            <div class="alert alert-primary" role="alert">
                jucării
            </div>
            <div class="alert alert-primary" role="alert">
                pături
            </div>
            <div class="alert alert-primary" role="alert">
                Tarcuri și alte materiale
            </div>

            <p>Noi ne ocupăm de restul și suntem alături de tine pe tot parcursul fosterului.</p>

        </div>
    </div>
@endsection
