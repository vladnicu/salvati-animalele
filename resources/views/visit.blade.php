@extends('layouts.app')

@section('content')
    @include('partials.page-title', [
        'title' => 'Despre adăpost și vizitare',
        'subtitle' => 'Adăpostul nostru este deschis vizitatorilor care doresc să cunoască câinii, să petreacă timp
                                    cu ei și să înțeleagă mai bine munca din spatele salvării lor.',
    ])

      @include('partials.hero-image-right', [
        'title' => 'Adăpostul public pentru câini fără stăpân din Baia Mare',
        'text' => 'Adapostul funcționează sub autoritatea administrației publice locale, ca parte a serviciului municipal de gestionare a câinilor fără deținător, în conformitate cu legislația națională privind protecția animalelor și gestionarea câinilor fără stăpân, precum și cu reglementările locale aprobate de Consiliul Local Baia Mare.
         Accesul câinilor în adăpost se realizează exclusiv prin serviciul public de capturare și gestionare a câinilor fără stăpân, prin structurile abilitate ale Poliției Locale Baia Mare, care au atribuția de a prelua și transporta animalele capturate de pe domeniul public. Adăpostul are o capacitate oficială de 419 locuri și asigură cazarea temporară a câinilor în condiții conforme normelor sanitar-veterinare și standardelor de bunăstare animală.',
        'image' => 'visit2.jpg',
    ])  

    @include('partials.hero-image-left', [
        'title' => 'Asociația Salvați Animalele Baia Mare,',
        'text' => 'Din anul 2015, adăpostul este gestionat de Asociația Salvați Animalele Baia Mare, care, pe lângă activitatea zilnică de îngrijire și management, atrage constant donatori și finanțatori pentru a îmbunătăți condițiile de trai ale câinilor, pentru a susține tratamentele medicale, programele de sterilizare și eforturile de creștere a șanselor de adopție.',
        'image' => 'visit3.jpg',
    ])

    @include('partials.hero-image-center', [
        'title' => 'Strategia de gestionare a populației canine',
        'text' => 'În acest adăpost nu se practică eutanasia ca metodă de control al populației canine. Strategia locală este orientată către adăpostire, îngrijire, sterilizare și adopție, în concordanță cu poziția administrației municipale, care a susținut constant că eutanasia în masă nu reprezintă o soluție durabilă. Eutanasia poate fi aplicată exclusiv în cazuri medicale grave, conform legislației sanitar-veterinare, atunci când starea animalului o impune și este confirmată de medicul veterinar.',
        'image' => 'visit1.jpg',
    ])

    @include('partials.featurette-list', [
        'titleprimary' => 'Uneori, o simplă vizită poate fi cel mai frumos moment din ziua unui',
        'titlesecondary' => 'câine.',
        'text' => ' Vizitele joacă un rol important în viața câinilor din adăpost. Interacțiunea cu oameni
                diferiți îi ajută să se socializeze, să capete încredere și să se obișnuiască cu prezența
                umană. Câinii care sunt mai relaxați și mai deschiși au șanse mai mari de a fi
                observați, înțeleși și, în cele din urmă, adoptați.',
        'listText' => 'Câteva reguli simple pentru vizite:',
        'listItems' => [
            'Accesul se face doar cu acordul personalului',
            'Respectăm indicațiile voluntarilor',
            'Nu hrănim câinii fără permisiune',
            'Copiii trebuie să fie însoțiți de adulți',
        ],
    ])

@endsection
