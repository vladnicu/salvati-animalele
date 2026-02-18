<div class="row flex-lg-row-reverse align-items-center g-5 py-5">

    <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">
            {{ $title }}
        </h1>
        <p class="lead">
            {{ $text }}
        </p>
    </div>
    <div class="col-10 col-sm-8 col-lg-6">
        <img src="{{ Vite::asset('resources/images/' . $image) }}"
            class="d-block mx-lg-auto img-fluid border rounded-3 shadow-lg" alt="Bootstrap Themes" width="700"
            height="500" loading="lazy" />
    </div>
</div>
