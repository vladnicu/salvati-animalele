  <div class="px-4 pt-5 my-5 text-center border-bottom">
      <h1 class="display-6 fw-bold text-body-emphasis">
          {{ $title }}
      </h1>
      <div class="col-lg-6 mx-auto">
          <p class="lead mb-4">
              {{ $text }}
          </p>
          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
          </div>
      </div>
      <div class="overflow-hidden" style="max-height: 30vh">
          <div class="container px-5">
              <img src="{{ Vite::asset('resources/images/' . $image) }}" class="img-fluid border rounded-3 shadow-lg mb-4"
                  alt="Example image" width="700" height="500" loading="lazy" />
          </div>
      </div>
  </div>
