 <div class="col">
     <div class="card shadow-sm">
         <img src="/images/sponsor/{{ $image }}" class="card-img-top" alt="...">
         <div class="card-body">
             <h5 class="card-title">
                 {{ $name }}
             </h5>
             <h6 class="card-subtitle mb-2 text-body-secondary">O surpriză pe patru lăbuțe își caută norocul!</h6>
             {{-- <ul class="list-group list-group-flush">
                 <li class="list-group-item"> <i class="bi bi-cake"></i> 9 ani</li>
                 <li class="list-group-item"> <i class="bi bi-gender-male"></i> Mascul</li>
                 <li class="list-group-item"> <i class="bi bi-rulers"></i> 42cm </li>
                 <li class="list-group-item"> <i class="bi bi-info-square-fill"></i> Este obișnuit cu copii și cu pisica.</li>
             </ul> --}}
             <div class="d-flex justify-content-between align-items-center">
                 <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal"
                     data-bs-target="#sponsorModal-{{ $name }}">
                     {{ $buttonText }}
                 </button>

                 <small class="text-body-secondary">9 ani</small>
             </div>
         </div>
     </div>
 </div>

 <!-- Modal -->
 <div class="modal modal-lg fade" id="sponsorModal-{{ $name }}" tabindex="-1"
     aria-labelledby="sponsorModal-{{ $name }}-Label" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h1 class="modal-title fs-5" id="sponsorModal-{{ $name }}-Label"> {{ $name }} </h1>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <!-- Carousel -->
                 <div id="carousel-{{ $name }}" class="carousel slide">
                     <div class="carousel-inner">

                         <!-- First image -->
                         <div class="carousel-item active">
                             <img src="/images/sponsor/{{ $image }}" class="d-block w-100" alt="...">
                         </div>

                         <!-- Loop images -->
                         @foreach ($images as $img)
                             <div class="carousel-item">
                                 <img src="/images/sponsor/{{ $img }}" class="d-block w-100" alt="...">
                             </div>
                         @endforeach
                     </div>
                     <button class="carousel-control-prev" type="button" data-bs-target="#carousel-{{ $name }}"
                         data-bs-slide="prev">
                         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                         <span class="visually-hidden">Previous</span>
                     </button>
                     <button class="carousel-control-next" type="button" data-bs-target="#carousel-{{ $name }}"
                         data-bs-slide="next">
                         <span class="carousel-control-next-icon" aria-hidden="true"></span>
                         <span class="visually-hidden">Next</span>
                     </button>
                 </div>
                 <!-- Carousel -->

                 {{ $text }}
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                 {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
             </div>
         </div>
     </div>
 </div>
