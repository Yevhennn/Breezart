<x-home.section-shell class="installation-section section-padding" id="section_3">
    <div class="row">
        @include('partials.home.section-heading', [
            'title' => __('Установка'),
            'subtitle' => __('кондиционеров'),
            'description' => __('Выберите подходящую модель с профессиональной установкой под ключ')
        ])
    </div>

    @include('partials.home.carousel-section', [
        'prevId' => 'acCarouselPrev',
        'nextId' => 'acCarouselNext',
        'trackId' => 'acCarouselTrack',
        'cards' => $installationCards,
        'cardPartial' => 'partials.home.installation-card'
    ])
</x-home.section-shell>
