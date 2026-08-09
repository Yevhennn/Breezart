<x-home.section-shell class="events-section section-bg section-padding" id="section_4">
    <div class="row">
        @include('partials.home.section-heading', [
            'title' => __('Обслуживание'),
            'subtitle' => __('кондиционеров'),
            'description' => __('Профессиональный сервис, диагностика, чистка и заправка оборудования')
        ])
    </div>

    @include('partials.home.carousel-section', [
        'prevId' => 'serviceCarouselPrev',
        'nextId' => 'serviceCarouselNext',
        'trackId' => 'serviceCarouselTrack',
        'cards' => $serviceCards,
        'cardPartial' => 'partials.home.service-card'
    ])
</x-home.section-shell>
