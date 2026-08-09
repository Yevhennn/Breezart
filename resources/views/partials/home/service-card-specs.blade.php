<div class="ac-specs-pills d-flex flex-wrap gap-2 mb-3">
    @if($card->spec_1)
    <span class="badge ac-spec-pill"><i class="bi-check-circle-fill me-1"></i>{{ $card->spec_1 }}</span>
    @endif
    @if($card->spec_2)
    <span class="badge ac-spec-pill"><i class="bi-check-circle-fill me-1"></i>{{ $card->spec_2 }}</span>
    @endif
    @if($card->spec_3)
    <span class="badge ac-spec-pill"><i class="bi-check-circle-fill me-1"></i>{{ $card->spec_3 }}</span>
    @endif
</div>
