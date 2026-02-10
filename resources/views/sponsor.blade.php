@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <h2 class="text-center mb-4">Ajută un câine aflat în luptă pentru viață</h2>
            <h4 class="text-center mb-4">Unii câini au nevoie de mai mult decât timp.
                Au nevoie de tratament medical constant, îngrijire zilnică și de oameni care să nu
                renunțe la ei.</h4>

            <p>Această pagină este dedicată câinilor cu probleme grave de sănătate sau foarte bătrâni
                — câini care, fără sprijin constant, nu ar avea nicio șansă. Poate nu vor fi niciodată
                adoptați, dar merită o viață trăită cu demnitate, fără durere și suferință.</p>
            <h5>Ce înseamnă să devii îngerul păzitor al unui câine?</h5>
            <p>A deveni înger păzitor înseamnă să oferi sprijin constant unui câine aflat într-o situație
                medicală gravă sau la final de viață. Nu este o adopție și nu presupune să îl iei acasă.
                Este un gest profund de grijă, prin care devii omul lui — cel care face posibil tratamentul,
                îngrijirea zilnică, confortul și siguranța de care are nevoie.</p>

            <h5>Cum ajută contribuția ta lunară</h5>
            <p>Sprijinul tău lunar ajută direct la:</p>
            <div class="alert alert-primary" role="alert">
                investigații și tratamente medicale
            </div>
             <div class="alert alert-primary" role="alert">
     medicamente și intervenții necesare
            </div>
             <div class="alert alert-primary" role="alert">
                îngrijire zilnică și monitorizare
            </div>
             <div class="alert alert-primary" role="alert">
                hrană specială și condiții de confort pentru câinii bătrâni
            </div>
            <p>A deveni înger păzitor înseamnă să fii sprijinul unui câine invizibil pentru mulți și să îi schimbi
                radical calitatea vieții.
                Pentru ei, acest sprijin înseamnă totul.</p>
        </div>
    </div>

    <div class="row">
        <div class="col d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="{{ Vite::asset('resources/images/Poza homepage 2.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Codrut</h5>
                    <a href="#" class="btn btn-primary">Sponsorizeaza</a>
                </div>
            </div>
        </div>
        <div class="col d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="{{ Vite::asset('resources/images/Poza homepage 2.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Gusti</h5>
                    <a href="#" class="btn btn-primary">Sponsorizeaza</a>
                </div>
            </div>
        </div>
        <div class="col d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="{{ Vite::asset('resources/images/Poza homepage 2.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Zmeurica</h5>
                    <a href="#" class="btn btn-primary">Sponsorizeaza</a>
                </div>
            </div>
        </div>

    </div>
@endsection
