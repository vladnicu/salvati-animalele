@extends('layouts.app')

@section('content')
    @include('partials.page-title', [
        'title' => 'Campanii de sterilizare',
        'subtitle' => 'Sterilizarea este cea mai eficientă și responsabilă metodă de a preveni abandonul și suferința animalelor.',
    ])

    @include('partials.hero-image-right', [
        'title' => 'Înmulțirea necontrolată este principala cauză a numărului mare de câini și pisici fără stăpân.',
        'text' => 'Prevenția este singura soluție reală pe termen lung. Prin sterilizare reducem numărul animalelor care ajung pe străzi sau în adăposturi, prevenim nașterile nedorite și contribuim la o comunitate mai sigură și mai echilibrată, atât pentru oameni, cât și pentru animale.',
        'image' => 'Desprenoi1.jpg',
    ])

    @include('partials.hero-image-left', [
        'title' => 'Asociația Salvați Animalele Baia Mare organizează în fiecare an minim 2 campanii de sterilizare gratuite',
        'text' => 'Desfășurate în diferite localități din județul Maramureș, acolo unde nevoia este cea mai mare. Prin aceste intervenții sprijinim comunitățile locale, proprietarii care nu își permit costurile procedurii și contribuim activ la prevenirea abandonului.',
        'image' => 'Desprenoi6.jpg',
    ])

    @include('partials.hero-image-right', [
        'title' => 'Peste 10.000 de câini și pisici ',
        'text' => 'În 16 ani de activitate, am reușit să sterilizăm peste 10.000 de câini și pisici — un impact real, care a prevenit nașterea a zeci de mii de animale nedorite și a redus semnificativ presiunea asupra adăposturilor și comunităților locale.',
        'image' => 'MonicaBohoni.jpg',
    ])

        @include('partials.hero-image-left', [
        'title' => 'Fiecare sprijin oferit ne ajută',
        'text' => 'Dacă vrei să contribui la continuarea acestor campanii, o poți face prin donații, sponsorizări sau implicare directă în promovarea programelor de sterilizare. Fiecare sprijin oferit ne ajută să prevenim suferința înainte ca ea să apară și să construim o comunitate mai responsabilă față de animale.',
        'image' => 'Desprenoi6.jpg',
    ])


    @include('partials.hero-image-center', [
        'title' => 'Număr de telefon dedicat',
        'text' => 'Anunțăm fiecare campanie din timp pe pagina noastră de Facebook, unde publicăm toate informațiile necesare pentru participare. Pentru fiecare campanie este pus la dispoziție un număr de telefon dedicat, la care se fac programările și se oferă detalii despre procedură, eligibilitate și desfășurare',
        'image' => 'Desprenoi5.jpg',
    ])
@endsection
