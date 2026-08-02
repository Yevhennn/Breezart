<div class="ac-card-wrapper">
    <div class="ac-card {{ $cardClass ?? '' }} h-100 d-flex flex-column">
        @include($imagePartial, ['card' => $card])
        <div class="ac-card-body d-flex flex-column flex-grow-1 p-4">
            <h4 class="ac-card-title mb-2">{{ $card->title }}</h4>
            @include($specsPartial, ['card' => $card])
            <p class="ac-card-desc flex-grow-1 mb-3">{{ $card->description }}</p>
            @include($footerPartial, ['card' => $card])
        </div>
    </div>
</div>
