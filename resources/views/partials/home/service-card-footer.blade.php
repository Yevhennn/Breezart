<div class="ac-card-footer border-top pt-3 mt-auto d-flex flex-column gap-3">
    <div class="ac-price-wrap">
        <span class="ac-price-label text-muted small d-block">{{ __($card->price_label) }}</span>
        <span class="ac-price-value fs-4 fw-bold">{{ __('от') }} {{ $card->price }}</span>
    </div>
    <button class="btn custom-btn w-100 open-order-modal"
        type="button"
        data-bs-toggle="modal"
        data-bs-target="#installationOrderModal"
        data-model="{{ $card->title }}"
        data-price="{{ __('от') }} {{ $card->price }}"
        data-power=""
        data-modal-title="{{ __('Заявка на обслуживание') }}"
        style="color: #000;">
        {{ __('Заказать обслуживание') }}
    </button>
</div>
