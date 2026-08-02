@include('partials.home.card-layout', [
    'card' => $card,
    'cardClass' => 'ac-card-white',
    'imagePartial' => 'partials.home.service-card-image',
    'specsPartial' => 'partials.home.service-card-specs',
    'footerPartial' => 'partials.home.service-card-footer'
])
