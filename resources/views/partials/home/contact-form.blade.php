<form action="{{ route('contact.message') }}" method="post" class="{{ $formClass ?? 'custom-form contact-form ajax-contact-form' }}" role="form">
    @csrf
    <h2 class="mb-3 pb-0">{{ $heading ?? __('Write to us') }}</h2>
    <div class="contact-alert-container mb-3"></div>

    @include('partials.home.contact-form-fields', ['buttonLabel' => $buttonLabel ?? __('Submit Form')])
</form>
