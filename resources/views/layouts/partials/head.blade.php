<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="{{ $__env->yieldContent('meta_description', __('Professional Air Conditioning Installation, Maintenance, and Repair Services')) }}">
<meta name="keywords" content="{{ $__env->yieldContent('meta_keywords', __('Air Conditioning, Installation, Maintenance, Repair, Lisboa, Setúbal, Margem Sul')) }}">
<meta name="author" content="Breezart Clima Service">
<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
<meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
<meta name="format-detection" content="telephone=no">
<meta name="theme-color" content="#0d6efd">
<link rel="canonical" href="{{ url()->current() }}">
<link rel="apple-touch-icon" href="{{ asset('images/logo.png') }}">

<title>{{ $__env->yieldContent('title', __('Breezart Clima Service - Professional AC Installation & Repair')) }}</title>
<link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">

<meta property="og:title" content="{{ $__env->yieldContent('title', __('Breezart Clima Service - Professional AC Installation & Repair')) }}">
<meta property="og:description" content="{{ $__env->yieldContent('meta_description', __('Professional Air Conditioning Installation, Maintenance, and Repair Services')) }}">
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:image" content="{{ $__env->yieldContent('meta_image', asset('images/logo.png')) }}">
<meta property="og:image:alt" content="{{ $__env->yieldContent('meta_image_alt', __('Breezart Clima logo')) }}">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:site_name" content="{{ config('app.name', 'Breezart Clima') }}">
<meta property="og:locale" content="{{ app()->getLocale() === 'ru' ? 'ru_RU' : 'pt_PT' }}">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $__env->yieldContent('title', __('Breezart Clima Service - Professional AC Installation & Repair')) }}">
<meta name="twitter:description" content="{{ $__env->yieldContent('meta_description', __('Professional Air Conditioning Installation, Maintenance, and Repair Services')) }}">
<meta name="twitter:image" content="{{ $__env->yieldContent('meta_image', asset('images/logo.png')) }}">
<meta name="twitter:image:alt" content="{{ $__env->yieldContent('meta_image_alt', __('Breezart Clima logo')) }}">
<meta name="twitter:site" content="@@BreezartClima">
<meta name="twitter:creator" content="@@BreezartClima">

<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@graph": [
    {
      "@@type": "WebSite",
      "name": {!! json_encode(config('app.name', 'Breezart Clima')) !!},
      "url": {!! json_encode(url('/')) !!},
      "publisher": {
        "@@type": "Organization",
        "name": {!! json_encode(config('app.name', 'Breezart Clima')) !!}
      },
    },
    {
      "@@type": "LocalBusiness",
      "name": {!! json_encode(config('app.name', 'Breezart Clima')) !!},
      "description": {!! json_encode($__env->yieldContent('meta_description', __('Professional Air Conditioning Installation, Maintenance, and Repair Services'))) !!},
      "url": {!! json_encode(url()->current()) !!},
      "logo": {!! json_encode(asset('images/logo.png')) !!},
      "image": {!! json_encode($__env->yieldContent('meta_image', asset('images/logo.png'))) !!},
      "telephone": "+351964446269",
      "email": "breezartclima@gmail.com",
      "address": {
        "@@type": "PostalAddress",
        "addressLocality": "Lisboa",
        "addressRegion": "Setúbal",
        "addressCountry": "PT"
      },
      "areaServed": ["Lisboa", "Setúbal", "Margem Sul"],
      "openingHours": ["Mo-Fr 08:00-18:00", "Sa 09:00-15:00"],
      "priceRange": "€€",
      "sameAs": ["https://wa.me/351964446269"]
    },
    {
      "@@type": "Service",
      "serviceType": "Air Conditioning Installation, Maintenance, and Repair",
      "provider": {
        "@@type": "LocalBusiness",
        "name": {!! json_encode(config('app.name', 'Breezart Clima')) !!}
      },
      "areaServed": ["Lisboa", "Setúbal", "Margem Sul"],
      "availableChannel": {
        "@@type": "ContactPoint",
        "contactType": "customer support",
        "telephone": "+351964446269"
      }
    },
    {
      "@@type": "Organization",
      "name": {!! json_encode(config('app.name', 'Breezart Clima')) !!},
      "url": {!! json_encode(url('/')) !!},
      "logo": {!! json_encode(asset('images/logo.png')) !!},
      "sameAs": ["https://wa.me/351964446269"],
      "contactPoint": {
        "@@type": "ContactPoint",
        "telephone": "+351964446269",
        "contactType": "customer support",
        "areaServed": ["Lisboa", "Setúbal", "Margem Sul"],
        "availableLanguage": ["Portuguese", "Russian"]
      }
    }
  ]
}
</script>

@stack('meta')

<!-- CSS FILES -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('css/templatemo-aircondi-service.css') }}" rel="stylesheet">
