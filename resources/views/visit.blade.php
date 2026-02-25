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


    @include('partials.hero-image-center', [
        'title' => 'Adăpostul public pentru câini fără stăpân din Baia Mare',
        'text' => 'Adapostul funcționează sub autoritatea administrației publice locale, ca parte a serviciului municipal de gestionare a câinilor fără deținător, în conformitate cu legislația națională privind protecția animalelor și gestionarea câinilor fără stăpân, precum și cu reglementările locale aprobate de Consiliul Local Baia Mare.',
        'image' => 'visit1.jpg',
    ])

   
    @include('partials.hero-image-left', [
        'title' => 'Pentru câini, aceste vizite înseamnă mai mult decât joacă.',
        'text' => 'În spațiul nostru verde, special amenajat, ei au șansa de a ieși din rutina adăpostului, de a primi atenție
                și de a se simți, măcar pentru o
                vreme, acasă. Uneori, câteva clipe de apropiere pot schimba complet starea unui câine.',
        'image' => 'Cosmo2.jpg',
    ])

    <hr class="featurette-divider" />

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

    <hr class="featurette-divider" />
@endsection
