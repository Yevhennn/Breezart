<x-home.section-shell class="contact-section" id="section_5" style="padding: 48px 0 40px;">
    <div class="row align-items-center g-4">
        <div class="col-lg-5 col-12">
            @include('partials.home.contact-form', ['formClass' => 'custom-form contact-form ajax-contact-form', 'heading' => __('Write to us'), 'buttonLabel' => __('Submit Form')])
        </div>

        <div class="col-lg-6 col-12 offset-lg-1">
            @include('partials.home.contact-details')
        </div>
    </div>
</x-home.section-shell>
