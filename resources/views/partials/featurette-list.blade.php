<div class="row featurette">
    <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">
            {{ $titleprimary }}
            <span class="text-body-secondary">{{ $titlesecondary }}</span>
        </h2>
        <p class="lead">
            {{ $text }}
        </p>
    </div>
    <div class="col-md-5">
        <p> {{ $listText }}</p>
        @isset($listItems)
            @foreach ($listItems as $item)
                <div class="alert alert-primary" role="alert">
                    {{ $item }}
                </div>
            @endforeach
        @endisset
    </div>
</div>
