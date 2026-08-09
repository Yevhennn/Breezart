<div class="ac-specs-pills d-flex flex-wrap gap-2 mb-3">
    <span class="badge ac-spec-pill">
        <i class="bi-lightning-charge-fill me-1"></i>{{ $card->power_kw }}
    </span>
    <span class="badge ac-spec-pill">
        <i class="bi-aspect-ratio-fill me-1"></i>{{ __('до') }} {{ $card->area_m2 }}
    </span>
    <span class="badge ac-spec-pill">
        <i class="bi-shield-check me-1"></i>{{ $card->energy_class }}
    </span>
</div>
