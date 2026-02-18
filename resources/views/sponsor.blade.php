@extends('layouts.app')

@section('content')
    @include('partials.page-title', [
        'title' => 'Ajută un câine aflat în luptă pentru viață',
        'subtitle' => ' Unii câini au nevoie de mai mult decât timp.
                                            Au nevoie de tratament medical constant, îngrijire zilnică și de oameni care să nu
                                            renunțe la ei.',
    ])


    @include('partials.hero-image-right', [
        'title' => 'Ce înseamnă să devii îngerul păzitor al unui câine?',
        'text' => 'Această pagină este dedicată câinilor cu probleme grave de sănătate sau foarte bătrâni
                        — câini care, fără sprijin constant, nu ar avea nicio șansă. Poate nu vor fi niciodată
                        adoptați, dar merită o viață trăită cu demnitate, fără durere și suferință.',
        'image' => 'Costica4.jpg',
    ])

    @include('partials.hero-image-left', [
        'title' => 'Ce înseamnă să devii îngerul păzitor al unui câine?',
        'text' => 'Această pagină este dedicată câinilor cu probleme grave de sănătate sau foarte bătrâni
                        — câini care, fără sprijin constant, nu ar avea nicio șansă. Poate nu vor fi niciodată
                        adoptați, dar merită o viață trăită cu demnitate, fără durere și suferință.',
        'image' => 'Cosmo2.jpg',
    ])

    <hr class="featurette-divider" />

    @include('partials.featurette-list', [
        'titleprimary' => 'Cum ajută contribuția ta',
        'titlesecondary' => 'lunară?',
        'text' => 'A deveni înger păzitor înseamnă să fii sprijinul unui câine invizibil pentru mulți și să îi schimbi
                    radical calitatea vieții.
                    Pentru ei, acest sprijin înseamnă totul.',
        'listText' => 'Sprijinul tău lunar ajută direct la:',
        'listItems' => [
            'Investigații și tratamente medicale',
            'Medicamente și intervenții necesare',
            'îngrijire zilnică și monitorizare',
            'Hrană specială și condiții de confort pentru câinii bătrâni',
        ],
    ])

    <hr class="featurette-divider" />

    <div class="album py-5 bg-body-tertiary">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @include('partials.dog-card', ['image' => 'Costica1.jpg', 'name' => 'Costica'])

                @include('partials.dog-card', ['image' => 'cosmo1.jpg', 'name' => 'Cosmo'])

                @include('partials.dog-card', ['image' => 'Milla1.jpg', 'name' => 'Milla'])
            </div>
        </div>
    </div>
@endsection
