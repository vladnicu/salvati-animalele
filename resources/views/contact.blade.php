@extends('layouts.app')

@section('content')
    @include('partials.page-title', [
        'title' => 'Contact',
        'subtitle' =>
            ' Ne poți contacta oricând folosind formularul de mai jos. Scrie-ne dacă ai sugestii, informații, întrebări generale despre animale sau adopții ori dacă dorești să ne oferi sprijin activ.',
    ])

     {{-- <div class="p-4 p-md-5 border rounded-3 bg-body-tertiary mb-4">
        <h4 class="mb-3">Locația noastră</h4>

        <div class="ratio ratio-16x9">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2952.369584577056!2d23.528990632552272!3d47.64833943395617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4737dd8e304706ad%3A0xe4928d95e84a697!2sEcarisaj%20Baia%20Mare!5e0!3m2!1sen!2sro!4v1773989425978!5m2!1sen!2sro"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div> --}}

    <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">

         <div class="ratio ratio-16x9">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2952.369584577056!2d23.528990632552272!3d47.64833943395617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4737dd8e304706ad%3A0xe4928d95e84a697!2sEcarisaj%20Baia%20Mare!5e0!3m2!1sen!2sro!4v1773989425978!5m2!1sen!2sro"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        </div>
        <div class="col-md-10 mx-auto col-lg-5">
            <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Nume" />
                    <label for="floatingInput">Nume</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" />
                    <label for="floatingInput">Adresa de email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Nume" />
                    <label for="floatingInput">Nume</label>
                </div>
                {{-- <div class="form-floating mb-3"> --}}
                    <textarea class="form-control mb-3" id="exampleFormControlTextarea1" rows="5" placeholder="Mesaj"></textarea>
                    {{-- <label for="exampleFormControlTextarea1">Mesaj</label> --}}
                {{-- </div> --}}

                <button class="w-100 btn btn-lg btn-primary" type="submit">
                    Send
                </button>
                {{-- <hr class="my-4" />
              <small class="text-body-secondary"
                >By clicking Sign up, you agree to the terms of use.</small
              > --}}
            </form>
        </div>
    </div>

    <div class="p-4 p-md-5 border rounded-3 bg-body-tertiary mb-4">
        <h4 class="mb-4">Informații de contact</h4>

        <div class="mb-3">
            <strong>Asociația Salvați Animalele</strong>
        </div>

        <div class="mb-2">
            <label class="form-label fw-semibold">Adresa</label>
            <div class="form-control bg-light">Strada Iazului, Baia Mare</div>
        </div>

        <div class="mb-2">
            <label class="form-label fw-semibold">Telefon</label>
            <div class="form-control bg-light">0757 465 249</div>
        </div>

        <div class="mb-2">
            <label class="form-label fw-semibold">E-mail</label>
            <div class="form-control bg-light">asoc.salvati.animalele@gmail.com</div>
        </div>

        <div class="mb-4">
            <label class="form-label fw-semibold">CUI</label>
            <div class="form-control bg-light">24558366</div>
        </div>

        <h5 class="mt-4 mb-3">Date bancare</h5>

        <div class="mb-2">
            <label class="form-label fw-semibold">LEI</label>
            <div class="form-control bg-light">RO18 BTRL 0250 1205 L432 61XX</div>
        </div>

        <div class="mb-2">
            <label class="form-label fw-semibold">EUR</label>
            <div class="form-control bg-light">RO90 BTRL 0250 4205 L432 61XX</div>
        </div>

        <div class="mb-2">
            <label class="form-label fw-semibold">USD</label>
            <div class="form-control bg-light">RO42 BTRL 0250 2205 L432 61XX</div>
        </div>

        <div class="mb-4">
            <label class="form-label fw-semibold">SWIFT</label>
            <div class="form-control bg-light">BTRLRO22</div>
        </div>

        <h5 class="mt-4 mb-3">Alte metode</h5>

        <div class="mb-2">
            <label class="form-label fw-semibold">PayPal</label>
            <div class="form-control bg-light">office@salvati-animalele.ro</div>
        </div>

        <div class="mb-2">
            <label class="form-label fw-semibold">Revolut</label>
            <div class="form-control bg-light">0743 114 488</div>
        </div>
    </div>

   
@endsection
