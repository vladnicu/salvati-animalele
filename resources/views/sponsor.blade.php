@extends('layouts.app')

@section('content')
    @include('partials.page-title', [
        'title' => 'Ajută un câine aflat în luptă pentru viață',
        'subtitle' => ' Unii câini au nevoie de mai mult decât timp.
                            Au nevoie de tratament medical constant, îngrijire zilnică și de oameni care să nu
                            renunțe la ei.',
    ])

    <div class="row">
        <div class="col">
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

    <div class="album py-5 bg-body-tertiary">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @for ($i = 0; $i < 6; $i++)
                    @include('partials.dog-card')
                @endfor
            </div>
        </div>
    </div>
@endsection
