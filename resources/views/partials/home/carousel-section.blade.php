<div class="ac-carousel-container position-relative">
    <button class="ac-carousel-btn ac-carousel-prev" id="{{ $prevId }}" aria-label="Previous">
        <i class="bi-chevron-left"></i>
    </button>
    <button class="ac-carousel-btn ac-carousel-next" id="{{ $nextId }}" aria-label="Next">
        <i class="bi-chevron-right"></i>
    </button>

    <div class="ac-carousel-track-container overflow-hidden">
        <div class="ac-carousel-track d-flex" id="{{ $trackId }}">
            @foreach($cards as $card)
                @include($cardPartial, ['card' => $card])
            @endforeach
        </div>
    </div>
</div>
