@php
$media = [];
if (!empty($card->photos)) {
    foreach ($card->photos as $photo) {
        $media[] = ['type' => 'image', 'src' => asset($photo)];
    }
}
if (!empty($card->video)) {
    $media[] = ['type' => 'video', 'src' => asset($card->video)];
}
$mediaCount = count($media);
@endphp

<div class="ac-card-img-slider position-relative" data-media='{{ json_encode($media) }}'>
    <img src="{{ asset($card->first_photo ?? '') }}" class="ac-card-img img-fluid" alt="{{ $card->title }}">
    <div class="ac-img-nav">
        <button type="button" class="ac-img-prev"><i class="bi-chevron-left"></i></button>
        <button type="button" class="ac-img-next"><i class="bi-chevron-right"></i></button>
    </div>
    <div class="ac-img-dots">
        @for($i = 0; $i < $mediaCount; $i++)
            <span class="dot {{ $i === 0 ? 'active' : '' }}"></span>
        @endfor
    </div>
    <span class="badge ac-badge-brand">{{ $card->badge }}</span>
    @if(!empty($card->video))
    <button type="button" class="badge ac-media-badge ac-play-video-btn"><i class="bi-play-circle-fill me-1"></i>{{ __('Видео') }}</button>
    @endif
</div>
