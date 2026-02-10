@extends('layouts.app')

@section('content')
    @include('partials.page-title', [
        'title' => 'Ce înseamnă să adopți un câine?',
        'subtitle' => 'Adopția este un angajament pe termen lung, bazat pe grijă și responsabilitate. Ne dorim ca fiecare adopție să
                    fie una reușită, atât pentru câine, cât și pentru familie.',
    ])
    <div class="row">
        <div class="col">

            <p>Adopția unui câine înseamnă mai mult decât a oferi un adăpost. Înseamnă să alegi să fii „acasă” pentru un
                suflet care a cunoscut abandonul, frica sau singurătatea. Pentru un câine din adăpost, adopția
                este începutul unei vieți noi — una în care este văzut, iubit și protejat.
                Un câine adoptat nu uită niciodată mâna care l-a scos din adăpost. Oferă o loialitate sinceră, recunoștință

            <p>Adopția presupune:</p>
            <div class="alert alert-primary" role="alert">
                Timp, răbdare și înțelegere
            </div>
            <div class="alert alert-primary" role="alert">
                Hrană, îngrijire medicală și mișcare zilnică
            </div>
            <div class="alert alert-primary" role="alert">
                Adaptare și iubire necondiționată
            </div>
            <div class="alert alert-primary" role="alert">
                Respectarea nevoilor câinelui
            </div>

            <p>Echipa noastră este alături de tine cu sfaturi și suport, pentru ca tranziția să fie cât mai ușoară.</p>

            <h3>Câinii care își așteaptă familia</h3>

            <p>Mai jos vei găsi o parte dintre câinii din adăpost care își caută o familie de mult timp. Sunt câini care au
                așteptat prea mult după o șansă și pentru care ne dorim, mai mult ca oricând, să găsim un cămin cât mai
                repede.
                Aceștia sunt doar o parte dintre câinii aflați în grija noastră.</p>


            <p>Dacă nu găsești aici câinele potrivit pentru tine, te încurajăm să ne contactezi — vom face tot posibilul să
                te
                ajutăm să găsești companionul potrivit.</p>


        </div>
    </div>
@endsection
