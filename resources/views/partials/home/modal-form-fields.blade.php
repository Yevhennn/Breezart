<form id="installationOrderForm" action="{{ route('installation.order') }}" method="POST">
    @csrf
    <input type="hidden" name="model_name" id="modalInputModelName">
    <input type="hidden" name="price" id="modalInputPrice">
    <input type="hidden" name="power_area" id="modalInputPowerArea">

    <div class="form-floating mb-3">
        <input type="text" name="name" id="modalInputName" class="form-control" placeholder="{{ __('Ваше имя') }}" required>
        <label for="modalInputName">{{ __('Ваше имя') }}</label>
    </div>

    <div class="form-floating mb-3">
        <input type="email" name="email" id="modalInputEmail" class="form-control" placeholder="{{ __('Почта для обратной связи') }}" required>
        <label for="modalInputEmail">{{ __('Почта для обратной связи') }}</label>
    </div>

    <div class="form-floating mb-4">
        <input type="tel" name="phone" id="modalInputPhone" class="form-control" placeholder="{{ __('Телефон') }}" required>
        <label for="modalInputPhone">{{ __('Телефон') }}</label>
    </div>

    <button type="submit" class="btn custom-btn w-100 py-3 fw-bold fs-6" id="modalSubmitBtn" style="color: #000;">
        <span class="spinner-border spinner-border-sm me-2 d-none" role="status" aria-hidden="true" id="modalSpinner"></span>
        {{ __('Отправить заявку') }}
    </button>
</form>
