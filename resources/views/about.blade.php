@extends('layouts.app')

@section('content')
    @include('partials.page-title', [
        'title' => 'Asociatia Salvati Animalele',
        'subtitle' => 'Asociația Salvați Animalele s-a născut dintr-o nevoie reală: aceea de a transforma nepăsarea în responsabilitate și compasiune. Înființată în septembrie 2008, organizația noastră luptă zi de zi pentru dreptul la
                                    viață și demnitate al animalelor fără stăpân.',
    ])

    @include('partials.hero-image-right', [
        'title' => 'O nevoie reală: aceea de a transforma nepăsarea în responsabilitate și compasiune.',
        'text' => 'Înființată în septembrie 2008, organizația noastră luptă zi de zi pentru dreptul la 
        viață și demnitate al animalelor fără stăpân.
                                    Din aprilie 2015 gestionăm adăpostul public din Baia Mare, unde fiecare suflet ajuns în grija noastră
                                    primește mai mult decât hrană și tratament – primește o șansă.',
        'image' => 'Desprenoi1.jpg',
    ])

    <hr class="featurette-divider" />

    @include('partials.featurette-list', [
        'titleprimary' => 'Din aprilie 2015 gestionăm adăpostul public din ',
        'titlesecondary' => 'Baia Mare.',
        'text' => 'Aici fiecare suflet ajuns în grija noastră
                                    primește mai mult decât hrană și tratament – primește o șansă.',
        'listText' => 'Ce am reușit împreună:',
        'listItems' => [
            'Peste 5000 de câini și pisici salvați din situații critice.',
            'Peste 7000 de animale sterilizate, pentru a preveni suferința generațiilor viitoare.',
            'Mii de adopții reușite, în țară și în străinătate.',
            'Campanii educaționale și evenimente caritabile, inclusiv concerte dedicate susținerii adăpostului.',
        ],
    ])

    <hr class="featurette-divider" />

    @include('partials.hero-image-left', [
        'title' => 'Credem în responsabilitate, în sterilizare ca soluție reală și în educație ca prevenție.',
        'text' => 'Credem că fiecare animal merită un nume, o poveste și o familie. Și mai credem că schimbarea începe cu
                                    oameni care aleg să le
                                    pese.
                                    În adăpostul nostru nu vorbim despre „cazuri”. Vorbim despre suflete. Despre bătrânei abandonați care încă
                                    mai speră. Despre pui care nu au cunoscut niciodată siguranța unui cămin. Despre câini și pisici care
                                    încă vor să iubească, chiar dacă au fost răniți',
        'image' => 'Desprenoi6.jpg',
    ])

    @include('partials.hero-image-right', [
        'title' => 'Monica Bohoni este președinta Asociației Salvați Animalele',
        'text' => 'Ea este omul care, zi de zi, își dedică timpul și energia celor care nu se pot apăra singuri. Nu pleacă din adăpost când programul se termină. Pentru
                ea, nu există „program”. Există doar suflete care au nevoie.
                Pentru Monica, salvarea animalelor nu este un proiect. Este o promisiune făcută fiecărui suflet care încă mai speră.',
        'image' => 'MonicaBohoni.jpg',
    ])

    @include('partials.hero-image-center', [
        'title' => 'Ce am reușit împreună:',
        'text' => 'Peste 5000 de câini și pisici salvați din situații critice.
                                    Peste 7000 de animale sterilizate, pentru a preveni suferința generațiilor viitoare.
                                    Mii de adopții reușite, în țară și în străinătate.
                                    Campanii educaționale și evenimente caritabile, inclusiv concerte dedicate susținerii adăpostului.',
        'image' => 'Desprenoi5.jpg',
    ])
@endsection
