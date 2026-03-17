@extends('layouts.app')

@section('content')
    @include('partials.page-title', [
        'title' => 'Formularul 230 – ajută fără să te coste nimic',
        'subtitle' => '3,5% din impozitul tău poate salva vieți',
    ])

    @include('partials.hero-image-center', [
        'title' => 'Știai că poți ajuta animalele din adăpost fără să plătești nimic în plus?',
        'text' => 'Prin completarea Formularului 230, poți redirecționa 3,5% din impozitul pe venit deja plătit, către Asociația Salvați Animalele.
                            Sunt bani care oricum merg către stat, dacă nu alegi unde să fie direcționați.
                            Tu nu pierzi nimic.
                            Pentru noi, înseamnă hrană, tratamente și șanse reale la viață pentru animalele salvate.',
        'image' => 'pozahomepage3.png',
        'blank' => true,
        'url' =>
            'https://redirectioneaza.ro/salvati-animalele/?fbclid=IwdGRjcAQGY4xleHRuA2FlbQIxMQBzcnRjBmFwcF9pZAo2NjI4NTY4Mzc5AAEeeaWxqh5N21wuxBsMrjmG3i1TqdFPMV0-U6tzVxGK6amGeD4SjSrmFKwAiL0_aem_KIJJ6TG94XtRmRf7QEAxmw',
    ])

    @include('partials.featurette-list', [
        'titleprimary' => 'Ce este, mai exact, ',
        'titlesecondary' => 'Formularul 230?',
        'text' =>
            'Formularul 230 este un document oficial prin care orice persoană care a avut venituri din salarii poate decide ca 3,5% din impozitul pe venit să fie redirecționat către un ONG.',
        'listText' => '',
        'listItems' => [
            'Nu este o donație din buzunarul tău',
            'Nu implică niciun cost suplimentar',
            'Nu te afectează financiar în niciun fel',
            'Este una dintre cele mai simple forme de ajutor.',
        ],
    ])

    <hr class="featurette-divider" />

    @include('partials.featurette-list', [
        'titleprimary' => 'De ce este important pentru noi?',
        'titlesecondary' => '',
        'text' =>
            'Pentru că fiecare 3,5% contează. Un gest mic pentru tine poate face o diferență enormă pentru ei.',
        'listText' => 'Pentru Asociația Salvați Animalele, aceste fonduri înseamnă:',
        'listItems' => [
            'Hrană pentru animalele din adăpost',
            'Tratamente și intervenții medicale',
            'Vaccinuri și deparazitări',
            'Sanse mai mari de supraviețuire pentru puii vulnerabili',
        ],
    ])

    <hr class="featurette-divider" />

    <div class="row">
        <div class="col">

            <div class="accordion" id="accordionPanelsStayOpenExample1">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseOne">
                            Cine poate completa Formularul 230? Poate completa formularul orice persoană care:
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <ul>
                                <li>Are venituri din salarii sau pensii</li>
                                <li>Plătește impozit pe venit în România</li>
                                <li>Nu a redirecționat deja 3,5% către alt ONG în același an fiscal</li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="col">
            <div class="accordion" id="accordionPanelsStayOpenExample2">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseTwo">
                            Până când se poate depune?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Formularul 230 se depune o dată pe
an, de obicei până la 25 mai.
Dacă nu este depus până la
termen, suma rămâne la stat.
                        </div>
                    </div>
                </div>


            </div>

        </div>

        <div class="col">
            <div class="accordion" id="accordionPanelsStayOpenExample3">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseThree">
                            Cum sunt folosite datele mele personale?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                        <div class="accordion-body">
                           Datele tale sunt folosite exclusiv pentru
completarea și depunerea Formularului 230.
Nu sunt distribuite către terți și sunt
prelucrate conform legislației GDPR.
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col">
            <div class="accordion" id="accordionPanelsStayOpenExample4">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseFour">
                            Când ajung banii la Asociația Salvați Animalele?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
                        <div class="accordion-body">
                           Declarația este procesată direct de ANAF, iar sumele redirecționate sunt virate către Asociația Salvați
Animalele după finalizarea procesării formularelor,
de obicei în a doua parte a anului. Asociația oferă
transparență și comunică modul în care sunt
folosite fondurile, pentru ca impactul contribuției
tale să fie vizibil.
                        </div>
                    </div>
                </div>
            </div>

        </div>
    @endsection
