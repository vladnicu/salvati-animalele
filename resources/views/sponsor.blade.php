@extends('layouts.app')

@section('content')
    @include('partials.page-title', [
        'title' => 'Ajută un câine aflat în luptă pentru viață',
        'subtitle' => ' Unii câini au nevoie de mai mult decât timp.
                                                        Au nevoie de tratament medical constant, îngrijire zilnică și de oameni care să nu
                                                        renunțe la ei.',
    ])


    @include('partials.hero-image-right', [
        'title' => 'Despre ce este vorba?',
        'text' => 'Această pagină este dedicată câinilor cu probleme grave de sănătate sau foarte bătrâni
                                    — câini care, fără sprijin constant, nu ar avea nicio șansă. Poate nu vor fi niciodată
                                    adoptați, dar merită o viață trăită cu demnitate, fără durere și suferință.',
        'image' => 'costica4.jpg',
    ])

    @include('partials.hero-image-left', [
        'title' => 'Ce înseamnă să devii îngerul păzitor al unui câine?',
        'text' => 'A deveni înger păzitor înseamnă să oferi sprijin constant unui câine aflat într-o situație
                            medicală gravă sau la final de viață.
                            Nu este o adopție și nu presupune să îl iei acasă.
                            Este un gest profund de grijă, prin care devii omul lui — cel care face posibil tratamentul,
                            îngrijirea zilnică, confortul și siguranța de care are nevoie.',
        'image' => 'sponsor/cosmo2.jpg',
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
                @include('partials.sponsor-dog-card', [
                    'image' => 'costica1.jpg',
                    'name' => 'Costica',
                    'buttonText' => 'Detalii',
                    'images' => ['costica2.jpg', 'costica3.jpg'],
                    'text' => 'Costică are 13 ani și, până în octombrie 2025, toată viața lui a însemnat străzi reci, foame și nesiguranță.
                                Acum este în adăpost, pentru prima dată în siguranță — dar bătrânețea vine cu luptele ei. 
                                Suferă de prostată mărită, este incontinent, are dureri de coloană pentru care ia antiinflamatoare și există suspiciunea
                                de cancer de prostată. Nu mai are nevoie de aventuri, ci doar de liniște, grijă și zile fără durere. Noi vrem să îi
                                oferim asta — o bătrânețe demnă și blândă, așa cum nu a avut niciodată. Cu sprijinul tău, putem continua
                                tratamentele și îi putem asigura confortul de care are atâta nevoie. Donează pentru Costică și ajută-l să
                                simtă, măcar acum, cum e să fii iubit.',
                ])

                @include('partials.sponsor-dog-card', [
                    'image' => 'cosmo1.jpg',
                    'name' => 'Cosmo',
                    'buttonText' => 'Detalii',
                    'images' => ['cosmo2.jpg'],
                    'text' => 'Cosmo are 15 ani și își petrece viața în adăpost de 7 ani — ani în care a cunoscut, în sfârșit, grija și siguranța
                                pe care nu le-a avut înainte. Este bătrân și paralizat, dar sufletul lui a rămas blând și dornic de afecțiune.
                                Pentru el avem un scăunel special cu rotile, iar momentele în care îl scoatem la plimbare sunt preferatele lui:
                                chiar dacă trupul nu îl mai ajută, cu ajutorul scaunului poate explora, se poate bucura de aer curat și parcă
                                întinerește de fiecare dată.
                                Cosmo are însă nevoie constantă de îngrijiri speciale: suferă de otită cronică, iar urechile lui trebuie tratate
                                periodic pentru a evita durerile și infecțiile. În plus, urmează o dietă hipoalergenică strictă, esențială pentru
                                sănătatea lui.
                                Cosmo nu mai visează la o altă viață — dar se bucură din plin de cea pe care o are acum, dacă este însoțită
                                de grijă și dragoste. Costurile tratamentelor și ale hranei speciale sunt continue, iar sprijinul oamenilor cu
                                inimă mare face diferența dintre supraviețuire și o bătrânețe trăită cu demnitate.
                                Sponsorizează-l pe Cosmo și ajută-ne să îi oferim în continuare plimbările care îl fac fericit și îngrijirea de care
                                are nevoie.',
                ])

                @include('partials.sponsor-dog-card', [
                    'image' => 'milla1.jpg',
                    'name' => 'Milla',
                    'buttonText' => 'Detalii',
                    'images' => ['milla2.jpg', 'milla3.jpg'],
                    'text' => 'Milla are 9 ani și se află în adăpost din iulie 2025, după o viață despre care nu știm mare lucru — dar știm
                                sigur că nu a fost ușoară. În prezent luptă cu o formațiune tumorală care nu răspunde la tratamentul pentru
                                tumora veneriană transmisibilă (Sarcomul Sticker), iar starea ei necesită monitorizare atentă și îngrijire
                                constantă. În plus, Milla nu mai are dinți, așa că are nevoie de hrană specială pentru seniori, moale și ușor
                                de înghițit, ca să poată mânca fără durere.
                                Este o cățelușă blândă, care nu cere mult — doar liniște, confort și șansa de a trăi fără suferință. Noi vrem să
                                îi oferim tot ce are nevoie, însă tratamentele, controalele și hrana specială înseamnă costuri continue.
                                Prin sponsorizarea Millei, nu oferi doar bani — îi oferi siguranță, grijă și dovada că, după ani grei, cineva chiar
                                ține la ea.',
                ])

            </div>
        </div>
    </div>
@endsection
