<div class="row g-2">
    <div class="col-lg-6 col-md-6 col-12">
        <div class="form-floating">
            <input type="text" name="full-name" id="{{ $idPrefix ?? 'contact' }}-full-name" class="form-control" placeholder="{{ __('Full Name') }}" required="">
            <label for="{{ $idPrefix ?? 'contact' }}-full-name">{{ __('Full Name') }}</label>
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-12">
        <div class="form-floating">
            <input type="email" name="email" id="{{ $idPrefix ?? 'contact' }}-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="{{ __('Email address') }}" required="">
            <label for="{{ $idPrefix ?? 'contact' }}-email">{{ __('Email address') }}</label>
        </div>
    </div>

    <div class="col-lg-12 col-12">
        <div class="form-floating">
            <textarea class="form-control" id="{{ $idPrefix ?? 'contact' }}-message" name="message" placeholder="{{ __('Describe message here') }}" style="height: 90px;"></textarea>
            <label for="{{ $idPrefix ?? 'contact' }}-message">{{ __('Message') }}</label>
        </div>
        <button type="submit" class="form-control">{{ $buttonLabel ?? __('Submit Form') }}</button>
    </div>
</div>
