<div class="ac-card-img-slider position-relative"
    data-photos='{{ json_encode(array_map(fn($p) => asset($p), $card->photos ?? [])) }}'>
    <img src="{{ asset($card->first_photo ?? '') }}"
        class="ac-card-img img-fluid"
        alt="{{ $card->title }}">
    <div class="ac-img-nav">
        <button type="button" class="ac-img-prev"><i class="bi-chevron-left"></i></button>
        <button type="button" class="ac-img-next"><i class="bi-chevron-right"></i></button>
    </div>
    <div class="ac-img-dots">
        @foreach($card->photos ?? [] as $i => $photo)
        <span class="dot {{ $i === 0 ? 'active' : '' }}"></span>
        @endforeach
    </div>
    <span class="badge ac-badge-brand">{{ $card->brand }}</span>
</div>
