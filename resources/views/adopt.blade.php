@extends('layouts.app')

@section('content')
    @include('partials.page-title', [
        'title' => 'Ce înseamnă să adopți un câine?',
        'subtitle' => 'Adopția este un angajament pe termen lung, bazat pe grijă și responsabilitate. Ne dorim ca fiecare adopție să
                                fie una reușită, atât pentru câine, cât și pentru familie.',
    ])

    @include('partials.hero-image-left', [
        'title' =>
            'Echipa noastră este alături de tine cu sfaturi și suport, pentru ca tranziția să fie cât mai ușoară.',
        'text' => 'Mai jos vei găsi o parte dintre câinii din adăpost care își caută o familie de mult timp. Sunt câini care au
                    așteptat prea mult după o șansă și pentru care ne dorim, mai mult ca oricând, să găsim un cămin cât mai
                    repede. Aceștia sunt doar o parte dintre câinii aflați în grija noastră. Dacă nu găsești aici câinele potrivit pentru tine, te încurajăm să ne contactezi — vom face tot posibilul să
                    te ajutăm să găsești companionul potrivit.',
        'image' => 'costica4.jpg',
    ])

    <hr class="featurette-divider" />

    @include('partials.featurette-list', [
        'titleprimary' => 'Adopția unui câine înseamnă mai mult decât a oferi un .',
        'titlesecondary' => 'adăpost.',
        'text' => 'Înseamnă să alegi să fii „acasă” pentru un
                            suflet care a cunoscut abandonul, frica sau singurătatea. Pentru un câine din adăpost, adopția
                            este începutul unei vieți noi — una în care este văzut, iubit și protejat.
                            Un câine adoptat nu uită niciodată mâna care l-a scos din adăpost. Oferă o loialitate sinceră, recunoștință',
        'listText' => 'Adopția presupune:',
        'listItems' => [
            'Timp, răbdare și înțelegere',
            ' Hrană, îngrijire medicală și mișcare zilnică',
            'Adaptare și iubire necondiționată',
            'Respectarea nevoilor câinelui',
        ],
    ])

    <hr class="featurette-divider" />

    <div class="album py-5 bg-body-tertiary">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @include('partials.adopt-dog-card', ['image' => 'costica1.jpg', 'name' => 'Costica'])

                @include('partials.adopt-dog-card', ['image' => 'cosmo1.jpg', 'name' => 'Cosmo'])

                @include('partials.adopt-dog-card', ['image' => 'milla1.jpg', 'name' => 'Milla'])
            </div>
        </div>
    </div>

    
@endsection
