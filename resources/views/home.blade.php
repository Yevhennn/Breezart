@extends('layouts.app')

@section('title', 'Breezart Service - Professional AC Installation & Repair')

@section('content')
<section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
    <div class="section-overlay"></div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#3D405B" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path>
    </svg>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12 mb-5 mb-lg-0 text-start">
                <h2 class="text-white">{{ __('Premium Air Conditioning Services') }}</h2>

                <h1 class="cd-headline rotate-1 text-white mb-4 pb-2">
                    <span>{{ __('Breezart is') }}</span>
                    <span class="cd-words-wrapper">
                        <b class="is-visible">{{ __('Efficient') }}</b>
                        <b>{{ __('Reliable') }}</b>
                        <b>{{ __('Comfortable') }}</b>
                    </span>
                </h1>

                <div class="custom-btn-group d-flex align-items-center gap-3 flex-wrap justify-content-start">
                    <a href="#section_3" class="btn custom-btn smoothscroll" style="color:#000;">{{ __('Book Service') }}</a>
                    <span class="smoothscroll text-white fs-3 fw-semibold">+351 964 446 269</span>
                </div>
            </div>
        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffffff" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
    </svg>
</section>

<section class="about-section section-padding" id="section_2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12 text-center">
                <h2 class="mb-lg-5 mb-4">{{ __('About Breezart') }}</h2>
            </div>

            <div class="col-lg-5 col-12 me-auto mb-4 mb-lg-0">
                <p>{{ __('Our company specializes in air conditioning systems and electrical equipment. For over 10 years we have been carrying out installation, maintenance and repair for residential, commercial and industrial facilities.') }}</p>
                <p>{{ __('During this time we have been trusted by thousands of satisfied customers. We work directly with suppliers and handle equipment from the world\'s leading brands: LG, Samsung, Bosch, Midea, Daitsu, Daikin, Bauf and others.') }}</p>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-0">
                <div class="member-block">
                    <div class="member-block-image-wrap">
                        <img src="{{ asset('images/founder.jpg') }}" class="member-block-image img-fluid" alt="Taras">
                    </div>
                    <div class="member-block-info d-flex align-items-center">
                        <h4>{{ __('Taras') }}</h4>
                        <p class="ms-auto">{{ __('Founder') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-bg-image">
    <svg viewBox="0 0 1265 144" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <path fill="rgba(255, 255, 255, 1)" d="M 0 40 C 164 40 164 20 328 20 L 328 20 L 328 0 L 0 0 Z" stroke-width="0"></path>
        <path fill="rgba(255, 255, 255, 1)" d="M 327 20 C 445.5 20 445.5 89 564 89 L 564 89 L 564 0 L 327 0 Z" stroke-width="0"></path>
        <path fill="rgba(255, 255, 255, 1)" d="M 563 89 C 724.5 89 724.5 48 886 48 L 886 48 L 886 0 L 563 0 Z" stroke-width="0"></path>
        <path fill="rgba(255, 255, 255, 1)" d="M 885 48 C 1006.5 48 1006.5 67 1128 67 L 1128 67 L 1128 0 L 885 0 Z" stroke-width="0"></path>
        <path fill="rgba(255, 255, 255, 1)" d="M 1127 67 C 1196 67 1196 0 1265 0 L 1265 0 L 1265 0 L 1127 0 Z" stroke-width="0"></path>
    </svg>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="section-bg-image-block">
                    <form action="mailto:breezartclima@gmail.com" method="post" class="custom-form contact-form mt-lg-4 mt-2" role="form">
                        @csrf
                        <h2 class="mb-4 pb-2">{{ __('Write to us') }}</h2>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-floating">
                                    <input type="text" name="full-name" id="full-name" class="form-control" placeholder="{{ __('Full Name') }}" required="">
                                    <label for="floatingInput">{{ __('Full Name') }}</label>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-floating">
                                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="{{ __('Email address') }}" required="">
                                    <label for="floatingInput">{{ __('Email address') }}</label>
                                </div>
                            </div>

                            <div class="col-lg-12 col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" id="message" name="message" placeholder="{{ __('Describe message here') }}"></textarea>
                                    <label for="floatingTextarea">{{ __('Message') }}</label>
                                </div>
                                <button type="submit" class="form-control">{{ __('Submit Form') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <svg viewBox="0 0 1265 144" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <path fill="rgba(255, 255, 255, 1)" d="M 0 40 C 164 40 164 20 328 20 L 328 20 L 328 0 L 0 0 Z" stroke-width="0"></path>
        <path fill="rgba(255, 255, 255, 1)" d="M 327 20 C 445.5 20 445.5 89 564 89 L 564 89 L 564 0 L 327 0 Z" stroke-width="0"></path>
        <path fill="rgba(255, 255, 255, 1)" d="M 563 89 C 724.5 89 724.5 48 886 48 L 886 48 L 886 0 L 563 0 Z" stroke-width="0"></path>
        <path fill="rgba(255, 255, 255, 1)" d="M 885 48 C 1006.5 48 1006.5 67 1128 67 L 1128 67 L 1128 0 L 885 0 Z" stroke-width="0"></path>
        <path fill="rgba(255, 255, 255, 1)" d="M 1127 67 C 1196 67 1196 0 1265 0 L 1265 0 L 1265 0 L 1127 0 Z" stroke-width="0"></path>
    </svg>
</section>

<section class="installation-section section-padding" id="section_3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12 text-center mx-auto mb-lg-5 mb-4">
                <h2><span>{{ __('Установка') }}</span> {{ __('кондиционеров') }}</h2>
                <p class="text-muted fs-5 mb-0">{{ __('Выберите подходящую модель с профессиональной установкой под ключ') }}</p>
            </div>
        </div>

        <!-- Cards Carousel Wrapper -->
        <div class="ac-carousel-container position-relative">
            <button class="ac-carousel-btn ac-carousel-prev" id="acCarouselPrev" aria-label="Previous">
                <i class="bi-chevron-left"></i>
            </button>
            <button class="ac-carousel-btn ac-carousel-next" id="acCarouselNext" aria-label="Next">
                <i class="bi-chevron-right"></i>
            </button>

            <div class="ac-carousel-track-container overflow-hidden">
                <div class="ac-carousel-track d-flex" id="acCarouselTrack">
                    
                    <!-- Card 1: Daikin -->
                    <div class="ac-card-wrapper">
                        <div class="ac-card h-100 d-flex flex-column">
                            <div class="ac-card-img-slider position-relative" data-photos='["{{ asset("images/install_aircondi/daikin1.jpg") }}", "{{ asset("images/install_aircondi/daikin2.jpg") }}"]'>
                                <img src="{{ asset('images/install_aircondi/daikin1.jpg') }}" class="ac-card-img img-fluid" alt="Daikin Sensira">
                                <div class="ac-img-nav">
                                    <button type="button" class="ac-img-prev"><i class="bi-chevron-left"></i></button>
                                    <button type="button" class="ac-img-next"><i class="bi-chevron-right"></i></button>
                                </div>
                                <div class="ac-img-dots">
                                    <span class="dot active"></span>
                                    <span class="dot"></span>
                                </div>
                                <span class="badge ac-badge-brand">Daikin</span>
                            </div>
                            <div class="ac-card-body d-flex flex-column flex-grow-1 p-4">
                                <h4 class="ac-card-title mb-2">Daikin Sensira FTXF35D</h4>
                                <div class="ac-specs-pills d-flex flex-wrap gap-2 mb-3">
                                    <span class="badge ac-spec-pill"><i class="bi-lightning-charge-fill me-1"></i>3.5 кВт</span>
                                    <span class="badge ac-spec-pill"><i class="bi-aspect-ratio-fill me-1"></i>до 35 м²</span>
                                    <span class="badge ac-spec-pill"><i class="bi-shield-check me-1"></i>A++</span>
                                </div>
                                <p class="ac-card-desc flex-grow-1 mb-3">Энергоэффективный инверторный кондиционер с фильтром Titanium Apatite и минимальным уровнем шума 20 дБ.</p>
                                <div class="ac-card-footer border-top pt-3 mt-auto d-flex flex-column gap-3">
                                    <div class="ac-price-wrap">
                                        <span class="ac-price-label text-muted small d-block">{{ __('Оборудование + монтаж') }}</span>
                                        <span class="ac-price-value fs-4 fw-bold">{{ __('от') }} 690 €</span>
                                    </div>
                                    <button class="btn custom-btn w-100 open-order-modal" 
                                            data-model="Daikin Sensira FTXF35D"
                                            data-price="от 690 €"
                                            data-power="3.5 кВт (до 35 м²)"
                                            style="color: #000;">
                                        {{ __('Заказать установку') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2: Bosch -->
                    <div class="ac-card-wrapper">
                        <div class="ac-card h-100 d-flex flex-column">
                            <div class="ac-card-img-slider position-relative" data-photos='["{{ asset("images/install_aircondi/bosh1.jpg") }}", "{{ asset("images/install_aircondi/bosh2.jpg") }}", "{{ asset("images/install_aircondi/bosh3.jpg") }}", "{{ asset("images/install_aircondi/bosh4.jpg") }}"]'>
                                <img src="{{ asset('images/install_aircondi/bosh1.jpg') }}" class="ac-card-img img-fluid" alt="Bosch Climate 3000i">
                                <div class="ac-img-nav">
                                    <button type="button" class="ac-img-prev"><i class="bi-chevron-left"></i></button>
                                    <button type="button" class="ac-img-next"><i class="bi-chevron-right"></i></button>
                                </div>
                                <div class="ac-img-dots">
                                    <span class="dot active"></span>
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                </div>
                                <span class="badge ac-badge-brand">Bosch</span>
                            </div>
                            <div class="ac-card-body d-flex flex-column flex-grow-1 p-4">
                                <h4 class="ac-card-title mb-2">Bosch Climate 3000i</h4>
                                <div class="ac-specs-pills d-flex flex-wrap gap-2 mb-3">
                                    <span class="badge ac-spec-pill"><i class="bi-lightning-charge-fill me-1"></i>3.5 кВт</span>
                                    <span class="badge ac-spec-pill"><i class="bi-aspect-ratio-fill me-1"></i>до 35 м²</span>
                                    <span class="badge ac-spec-pill"><i class="bi-shield-check me-1"></i>A++</span>
                                </div>
                                <p class="ac-card-desc flex-grow-1 mb-3">Немецкое качество, ионизатор воздуха HD-фильтр, модуль Wi-Fi и интеллектуальная функция Follow Me.</p>
                                <div class="ac-card-footer border-top pt-3 mt-auto d-flex flex-column gap-3">
                                    <div class="ac-price-wrap">
                                        <span class="ac-price-label text-muted small d-block">{{ __('Оборудование + монтаж') }}</span>
                                        <span class="ac-price-value fs-4 fw-bold">{{ __('от') }} 640 €</span>
                                    </div>
                                    <button class="btn custom-btn w-100 open-order-modal"
                                            data-model="Bosch Climate 3000i 3.5 kW"
                                            data-price="от 640 €"
                                            data-power="3.5 кВт (до 35 м²)"
                                            style="color: #000;">
                                        {{ __('Заказать установку') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3: LG Dualcool -->
                    <div class="ac-card-wrapper">
                        <div class="ac-card h-100 d-flex flex-column">
                            <div class="ac-card-img-slider position-relative" data-photos='["{{ asset("images/install_aircondi/lg1.jpg") }}", "{{ asset("images/install_aircondi/lg2.jpg") }}", "{{ asset("images/install_aircondi/lg3.jpg") }}"]'>
                                <img src="{{ asset('images/install_aircondi/lg1.jpg') }}" class="ac-card-img img-fluid" alt="LG Dualcool">
                                <div class="ac-img-nav">
                                    <button type="button" class="ac-img-prev"><i class="bi-chevron-left"></i></button>
                                    <button type="button" class="ac-img-next"><i class="bi-chevron-right"></i></button>
                                </div>
                                <div class="ac-img-dots">
                                    <span class="dot active"></span>
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                </div>
                                <span class="badge ac-badge-brand">LG</span>
                            </div>
                            <div class="ac-card-body d-flex flex-column flex-grow-1 p-4">
                                <h4 class="ac-card-title mb-2">LG Dualcool Inverter</h4>
                                <div class="ac-specs-pills d-flex flex-wrap gap-2 mb-3">
                                    <span class="badge ac-spec-pill"><i class="bi-lightning-charge-fill me-1"></i>3.5 кВт</span>
                                    <span class="badge ac-spec-pill"><i class="bi-aspect-ratio-fill me-1"></i>до 35 м²</span>
                                    <span class="badge ac-spec-pill"><i class="bi-shield-check me-1"></i>A++</span>
                                </div>
                                <p class="ac-card-desc flex-grow-1 mb-3">Технология Dual Inverter с быстрой заморозкой и экономией энергии до 70%, супертихий режим 19 дБ.</p>
                                <div class="ac-card-footer border-top pt-3 mt-auto d-flex flex-column gap-3">
                                    <div class="ac-price-wrap">
                                        <span class="ac-price-label text-muted small d-block">{{ __('Оборудование + монтаж') }}</span>
                                        <span class="ac-price-value fs-4 fw-bold">{{ __('от') }} 620 €</span>
                                    </div>
                                    <button class="btn custom-btn w-100 open-order-modal"
                                            data-model="LG Dualcool Inverter S12ET"
                                            data-price="от 620 €"
                                            data-power="3.5 кВт (до 35 м²)"
                                            style="color: #000;">
                                        {{ __('Заказать установку') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4: Samsung WindFree -->
                    <div class="ac-card-wrapper">
                        <div class="ac-card h-100 d-flex flex-column">
                            <div class="ac-card-img-slider position-relative" data-photos='["{{ asset("images/install_aircondi/samsung1.jpg") }}", "{{ asset("images/install_aircondi/samsung2.jpg") }}"]'>
                                <img src="{{ asset('images/install_aircondi/samsung1.jpg') }}" class="ac-card-img img-fluid" alt="Samsung WindFree">
                                <div class="ac-img-nav">
                                    <button type="button" class="ac-img-prev"><i class="bi-chevron-left"></i></button>
                                    <button type="button" class="ac-img-next"><i class="bi-chevron-right"></i></button>
                                </div>
                                <div class="ac-img-dots">
                                    <span class="dot active"></span>
                                    <span class="dot"></span>
                                </div>
                                <span class="badge ac-badge-brand">Samsung</span>
                            </div>
                            <div class="ac-card-body d-flex flex-column flex-grow-1 p-4">
                                <h4 class="ac-card-title mb-2">Samsung WindFree</h4>
                                <div class="ac-specs-pills d-flex flex-wrap gap-2 mb-3">
                                    <span class="badge ac-spec-pill"><i class="bi-lightning-charge-fill me-1"></i>3.5 кВт</span>
                                    <span class="badge ac-spec-pill"><i class="bi-aspect-ratio-fill me-1"></i>до 35 м²</span>
                                    <span class="badge ac-spec-pill"><i class="bi-shield-check me-1"></i>A++</span>
                                </div>
                                <p class="ac-card-desc flex-grow-1 mb-3">Охлаждение без неприятного прямого сквозняка через 23 000 микроотверстий и управление со смартфона.</p>
                                <div class="ac-card-footer border-top pt-3 mt-auto d-flex flex-column gap-3">
                                    <div class="ac-price-wrap">
                                        <span class="ac-price-label text-muted small d-block">{{ __('Оборудование + монтаж') }}</span>
                                        <span class="ac-price-value fs-4 fw-bold">{{ __('от') }} 710 €</span>
                                    </div>
                                    <button class="btn custom-btn w-100 open-order-modal"
                                            data-model="Samsung WindFree Comfort"
                                            data-price="от 710 €"
                                            data-power="3.5 кВт (до 35 м²)"
                                            style="color: #000;">
                                        {{ __('Заказать установку') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 5: Haier Flexis -->
                    <div class="ac-card-wrapper">
                        <div class="ac-card h-100 d-flex flex-column">
                            <div class="ac-card-img-slider position-relative" data-photos='["{{ asset("images/install_aircondi/haier1.jpg") }}", "{{ asset("images/install_aircondi/haier2.jpg") }}", "{{ asset("images/install_aircondi/haier3.jpg") }}", "{{ asset("images/install_aircondi/haier4.jpg") }}"]'>
                                <img src="{{ asset('images/install_aircondi/haier1.jpg') }}" class="ac-card-img img-fluid" alt="Haier Flexis">
                                <div class="ac-img-nav">
                                    <button type="button" class="ac-img-prev"><i class="bi-chevron-left"></i></button>
                                    <button type="button" class="ac-img-next"><i class="bi-chevron-right"></i></button>
                                </div>
                                <div class="ac-img-dots">
                                    <span class="dot active"></span>
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                </div>
                                <span class="badge ac-badge-brand">Haier</span>
                            </div>
                            <div class="ac-card-body d-flex flex-column flex-grow-1 p-4">
                                <h4 class="ac-card-title mb-2">Haier Flexis Matt</h4>
                                <div class="ac-specs-pills d-flex flex-wrap gap-2 mb-3">
                                    <span class="badge ac-spec-pill"><i class="bi-lightning-charge-fill me-1"></i>3.5 кВт</span>
                                    <span class="badge ac-spec-pill"><i class="bi-aspect-ratio-fill me-1"></i>до 35 м²</span>
                                    <span class="badge ac-spec-pill"><i class="bi-shield-check me-1"></i>A+++</span>
                                </div>
                                <p class="ac-card-desc flex-grow-1 mb-3">УФ-лампа стерилизации воздуха, термолокация присутствия людей, функция заморозки-самоочистки Self-Clean.</p>
                                <div class="ac-card-footer border-top pt-3 mt-auto d-flex flex-column gap-3">
                                    <div class="ac-price-wrap">
                                        <span class="ac-price-label text-muted small d-block">{{ __('Оборудование + монтаж') }}</span>
                                        <span class="ac-price-value fs-4 fw-bold">{{ __('от') }} 590 €</span>
                                    </div>
                                    <button class="btn custom-btn w-100 open-order-modal"
                                            data-model="Haier Flexis Matt White"
                                            data-price="от 590 €"
                                            data-power="3.5 кВт (до 35 м²)"
                                            style="color: #000;">
                                        {{ __('Заказать установку') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 6: Midea -->
                    <div class="ac-card-wrapper">
                        <div class="ac-card h-100 d-flex flex-column">
                            <div class="ac-card-img-slider position-relative" data-photos='["{{ asset("images/install_aircondi/midea1.jpg") }}", "{{ asset("images/install_aircondi/midea2.jpg") }}"]'>
                                <img src="{{ asset('images/install_aircondi/midea1.jpg') }}" class="ac-card-img img-fluid" alt="Midea Xtreme Save">
                                <div class="ac-img-nav">
                                    <button type="button" class="ac-img-prev"><i class="bi-chevron-left"></i></button>
                                    <button type="button" class="ac-img-next"><i class="bi-chevron-right"></i></button>
                                </div>
                                <div class="ac-img-dots">
                                    <span class="dot active"></span>
                                    <span class="dot"></span>
                                </div>
                                <span class="badge ac-badge-brand">Midea</span>
                            </div>
                            <div class="ac-card-body d-flex flex-column flex-grow-1 p-4">
                                <h4 class="ac-card-title mb-2">Midea Xtreme Save</h4>
                                <div class="ac-specs-pills d-flex flex-wrap gap-2 mb-3">
                                    <span class="badge ac-spec-pill"><i class="bi-lightning-charge-fill me-1"></i>3.5 кВт</span>
                                    <span class="badge ac-spec-pill"><i class="bi-aspect-ratio-fill me-1"></i>до 35 м²</span>
                                    <span class="badge ac-spec-pill"><i class="bi-shield-check me-1"></i>A+++</span>
                                </div>
                                <p class="ac-card-desc flex-grow-1 mb-3">Сверхэкономичное энергопотребление i-Eco, система двойной фильтрации и генератор ионов Air Magic.</p>
                                <div class="ac-card-footer border-top pt-3 mt-auto d-flex flex-column gap-3">
                                    <div class="ac-price-wrap">
                                        <span class="ac-price-label text-muted small d-block">{{ __('Оборудование + монтаж') }}</span>
                                        <span class="ac-price-value fs-4 fw-bold">{{ __('от') }} 520 €</span>
                                    </div>
                                    <button class="btn custom-btn w-100 open-order-modal"
                                            data-model="Midea Xtreme Save Pro"
                                            data-price="от 520 €"
                                            data-power="3.5 кВт (до 35 м²)"
                                            style="color: #000;">
                                        {{ __('Заказать установку') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 7: Mitsubishi -->
                    <div class="ac-card-wrapper">
                        <div class="ac-card h-100 d-flex flex-column">
                            <div class="ac-card-img-slider position-relative" data-photos='["{{ asset("images/install_aircondi/mitsubishi1.jpg") }}", "{{ asset("images/install_aircondi/mitsubishi2.jpg") }}"]'>
                                <img src="{{ asset('images/install_aircondi/mitsubishi1.jpg') }}" class="ac-card-img img-fluid" alt="Mitsubishi Electric">
                                <div class="ac-img-nav">
                                    <button type="button" class="ac-img-prev"><i class="bi-chevron-left"></i></button>
                                    <button type="button" class="ac-img-next"><i class="bi-chevron-right"></i></button>
                                </div>
                                <div class="ac-img-dots">
                                    <span class="dot active"></span>
                                    <span class="dot"></span>
                                </div>
                                <span class="badge ac-badge-brand">Mitsubishi</span>
                            </div>
                            <div class="ac-card-body d-flex flex-column flex-grow-1 p-4">
                                <h4 class="ac-card-title mb-2">Mitsubishi Electric</h4>
                                <div class="ac-specs-pills d-flex flex-wrap gap-2 mb-3">
                                    <span class="badge ac-spec-pill"><i class="bi-lightning-charge-fill me-1"></i>3.4 кВт</span>
                                    <span class="badge ac-spec-pill"><i class="bi-aspect-ratio-fill me-1"></i>до 35 м²</span>
                                    <span class="badge ac-spec-pill"><i class="bi-shield-check me-1"></i>A++</span>
                                </div>
                                <p class="ac-card-desc flex-grow-1 mb-3">Премиальная японская сборка, бесшумная работа (21 дБ) и рекордная долговечность компрессора.</p>
                                <div class="ac-card-footer border-top pt-3 mt-auto d-flex flex-column gap-3">
                                    <div class="ac-price-wrap">
                                        <span class="ac-price-label text-muted small d-block">{{ __('Оборудование + монтаж') }}</span>
                                        <span class="ac-price-value fs-4 fw-bold">{{ __('от') }} 750 €</span>
                                    </div>
                                    <button class="btn custom-btn w-100 open-order-modal"
                                            data-model="Mitsubishi Electric MSZ-HR35VF"
                                            data-price="от 750 €"
                                            data-power="3.4 кВт (до 35 м²)"
                                            style="color: #000;">
                                        {{ __('Заказать установку') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 8: Bauf -->
                    <div class="ac-card-wrapper">
                        <div class="ac-card h-100 d-flex flex-column">
                            <div class="ac-card-img-slider position-relative" data-photos='["{{ asset("images/install_aircondi/bauf1.jpg") }}", "{{ asset("images/install_aircondi/bauf2.jpg") }}", "{{ asset("images/install_aircondi/bauf3.jpg") }}", "{{ asset("images/install_aircondi/bauf4.jpg") }}"]'>
                                <img src="{{ asset('images/install_aircondi/bauf1.jpg') }}" class="ac-card-img img-fluid" alt="Bauf Eco">
                                <div class="ac-img-nav">
                                    <button type="button" class="ac-img-prev"><i class="bi-chevron-left"></i></button>
                                    <button type="button" class="ac-img-next"><i class="bi-chevron-right"></i></button>
                                </div>
                                <div class="ac-img-dots">
                                    <span class="dot active"></span>
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                </div>
                                <span class="badge ac-badge-brand">Bauf</span>
                            </div>
                            <div class="ac-card-body d-flex flex-column flex-grow-1 p-4">
                                <h4 class="ac-card-title mb-2">Bauf Eco Inverter</h4>
                                <div class="ac-specs-pills d-flex flex-wrap gap-2 mb-3">
                                    <span class="badge ac-spec-pill"><i class="bi-lightning-charge-fill me-1"></i>3.5 кВт</span>
                                    <span class="badge ac-spec-pill"><i class="bi-aspect-ratio-fill me-1"></i>до 35 м²</span>
                                    <span class="badge ac-spec-pill"><i class="bi-shield-check me-1"></i>A+</span>
                                </div>
                                <p class="ac-card-desc flex-grow-1 mb-3">Надежная доступная сплит-система с компрессором нового поколения, защитным покрытием и турбо-режимом.</p>
                                <div class="ac-card-footer border-top pt-3 mt-auto d-flex flex-column gap-3">
                                    <div class="ac-price-wrap">
                                        <span class="ac-price-label text-muted small d-block">{{ __('Оборудование + монтаж') }}</span>
                                        <span class="ac-price-value fs-4 fw-bold">{{ __('от') }} 450 €</span>
                                    </div>
                                    <button class="btn custom-btn w-100 open-order-modal"
                                            data-model="Bauf Eco Inverter 12000 BTU"
                                            data-price="от 450 €"
                                            data-power="3.5 кВт (до 35 м²)"
                                            style="color: #000;">
                                        {{ __('Заказать установку') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal for Installation Order -->
<div class="modal fade" id="installationOrderModal" tabindex="-1" aria-labelledby="installationOrderModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg" style="border-radius: 20px;">
            <div class="modal-header border-0 pb-0" style="background: var(--secondary-color); color: #fff; border-top-left-radius: 20px; border-top-right-radius: 20px; padding: 25px 25px 15px 25px;">
                <div>
                    <h5 class="modal-title text-white fw-bold" id="installationOrderModalLabel">{{ __('Заявка на установку') }}</h5>
                    <p class="text-white-50 small mb-2" id="modalSelectedModelSubtitle"></p>
                </div>
                <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <div id="modalAlertContainer"></div>

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
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // 1. REUSABLE CAROUSEL INITIALIZER
    function initCarousel(trackId, prevBtnId, nextBtnId) {
        const track = document.getElementById(trackId);
        const prevBtn = document.getElementById(prevBtnId);
        const nextBtn = document.getElementById(nextBtnId);
        
        if (!track || !prevBtn || !nextBtn) return;

        const cards = track.querySelectorAll('.ac-card-wrapper');
        let currentIndex = 0;

        function getVisibleCount() {
            if (window.innerWidth <= 767) return 1;
            if (window.innerWidth <= 991) return 2;
            return 3;
        }

        function updateCarousel() {
            const visibleCount = getVisibleCount();
            const maxIndex = Math.max(0, cards.length - visibleCount);
            if (currentIndex > maxIndex) currentIndex = maxIndex;
            if (currentIndex < 0) currentIndex = 0;

            const cardWidthPercentage = 100 / visibleCount;
            track.style.transform = `translateX(-${currentIndex * cardWidthPercentage}%)`;
        }

        prevBtn.addEventListener('click', function() {
            if (currentIndex > 0) {
                currentIndex--;
            } else {
                const visibleCount = getVisibleCount();
                currentIndex = Math.max(0, cards.length - visibleCount);
            }
            updateCarousel();
        });

        nextBtn.addEventListener('click', function() {
            const visibleCount = getVisibleCount();
            const maxIndex = Math.max(0, cards.length - visibleCount);
            if (currentIndex < maxIndex) {
                currentIndex++;
            } else {
                currentIndex = 0;
            }
            updateCarousel();
        });

        window.addEventListener('resize', updateCarousel);
        updateCarousel();
    }

    // Initialize both carousels
    initCarousel('acCarouselTrack', 'acCarouselPrev', 'acCarouselNext');
    initCarousel('serviceCarouselTrack', 'serviceCarouselPrev', 'serviceCarouselNext');

    // 2. DYNAMIC MEDIA SLIDER (PHOTOS & VIDEOS)
    document.querySelectorAll('.ac-card-img-slider').forEach(function(slider) {
        const mediaData = slider.getAttribute('data-media');
        const photosData = slider.getAttribute('data-photos');
        
        let mediaItems = [];
        if (mediaData) {
            mediaItems = JSON.parse(mediaData);
        } else if (photosData) {
            mediaItems = JSON.parse(photosData).map(url => ({ type: 'image', src: url }));
        }

        if (mediaItems.length <= 1) return;

        const prevBtn = slider.querySelector('.ac-img-prev');
        const nextBtn = slider.querySelector('.ac-img-next');
        const dots = slider.querySelectorAll('.ac-img-dots .dot');
        const mediaBadge = slider.querySelector('.ac-media-badge');

        let currentMediaIndex = 0;

        function showMedia(idx) {
            currentMediaIndex = (idx + mediaItems.length) % mediaItems.length;
            const item = mediaItems[currentMediaIndex];

            let currentEl = slider.querySelector('.ac-card-img, .ac-card-video');
            if (currentEl) {
                currentEl.style.opacity = '0.3';
            }

            setTimeout(() => {
                if (item.type === 'video') {
                    if (!currentEl || !currentEl.classList.contains('ac-card-video')) {
                        const videoEl = document.createElement('video');
                        videoEl.src = item.src;
                        videoEl.className = 'ac-card-video';
                        videoEl.autoplay = true;
                        videoEl.loop = true;
                        videoEl.muted = true;
                        videoEl.playsInline = true;
                        if (currentEl) currentEl.replaceWith(videoEl);
                        else slider.prepend(videoEl);
                    } else {
                        currentEl.src = item.src;
                        currentEl.play();
                    }
                    if (mediaBadge) mediaBadge.innerHTML = '<i class="bi-play-circle-fill me-1"></i>Видео';
                } else {
                    if (!currentEl || !currentEl.classList.contains('ac-card-img')) {
                        const imgEl = document.createElement('img');
                        imgEl.src = item.src;
                        imgEl.className = 'ac-card-img img-fluid';
                        imgEl.alt = 'AC Service';
                        if (currentEl) currentEl.replaceWith(imgEl);
                        else slider.prepend(imgEl);
                    } else {
                        currentEl.src = item.src;
                    }
                    if (mediaBadge) mediaBadge.innerHTML = '<i class="bi-image-fill me-1"></i>Фото';
                }

                const updatedEl = slider.querySelector('.ac-card-img, .ac-card-video');
                if (updatedEl) updatedEl.style.opacity = '1';
            }, 150);

            dots.forEach((dot, i) => {
                dot.classList.toggle('active', i === currentMediaIndex);
            });
        }

        if (prevBtn) {
            prevBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                showMedia(currentMediaIndex - 1);
            });
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                showMedia(currentMediaIndex + 1);
            });
        }

        if (mediaBadge && mediaBadge.classList.contains('ac-play-video-btn')) {
            mediaBadge.addEventListener('click', function(e) {
                e.stopPropagation();
                const videoIdx = mediaItems.findIndex(item => item.type === 'video');
                if (videoIdx !== -1) {
                    showMedia(videoIdx);
                }
            });
        }

        dots.forEach(function(dot, i) {
            dot.addEventListener('click', function(e) {
                e.stopPropagation();
                showMedia(i);
            });
        });
    });

    // 3. MODAL ORDER POPUP HANDLING
    const orderButtons = document.querySelectorAll('.open-order-modal');
    const orderModalEl = document.getElementById('installationOrderModal');
    let bsOrderModal = null;
    
    if (orderModalEl && typeof bootstrap !== 'undefined') {
        bsOrderModal = new bootstrap.Modal(orderModalEl);
    }

    orderButtons.forEach(function(btn) {
        btn.addEventListener('click', function() {
            const model = this.getAttribute('data-model');
            const price = this.getAttribute('data-price');
            const power = this.getAttribute('data-power');

            document.getElementById('modalInputModelName').value = model;
            document.getElementById('modalInputPrice').value = price;
            document.getElementById('modalInputPowerArea').value = power;
            document.getElementById('modalSelectedModelSubtitle').textContent = model + ' (' + price + ')';
            document.getElementById('modalAlertContainer').innerHTML = '';

            if (bsOrderModal) {
                bsOrderModal.show();
            } else {
                $('#installationOrderModal').modal('show');
            }
        });
    });

    // 4. AJAX FORM SUBMISSION
    const orderForm = document.getElementById('installationOrderForm');
    if (orderForm) {
        orderForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const submitBtn = document.getElementById('modalSubmitBtn');
            const spinner = document.getElementById('modalSpinner');
            const alertContainer = document.getElementById('modalAlertContainer');

            submitBtn.disabled = true;
            spinner.classList.remove('d-none');
            alertContainer.innerHTML = '';

            const formData = new FormData(this);

            fetch(this.action, {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': formData.get('_csrf') || document.querySelector('meta[name="csrf-token"]')?.content
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                submitBtn.disabled = false;
                spinner.classList.add('d-none');

                if (data.success) {
                    alertContainer.innerHTML = `
                        <div class="alert alert-success border-0 shadow-sm rounded-3">
                            <i class="bi-check-circle-fill me-2"></i>${data.message}
                        </div>
                    `;
                    orderForm.reset();
                    setTimeout(() => {
                        if (bsOrderModal) bsOrderModal.hide();
                    }, 2500);
                } else {
                    alertContainer.innerHTML = `
                        <div class="alert alert-danger border-0 shadow-sm rounded-3">
                            <i class="bi-exclamation-triangle-fill me-2"></i>Произошла ошибка при отправке заявки. Попробуйте еще раз.
                        </div>
                    `;
                }
            })
            .catch(error => {
                submitBtn.disabled = false;
                spinner.classList.add('d-none');
                alertContainer.innerHTML = `
                    <div class="alert alert-success border-0 shadow-sm rounded-3">
                        <i class="bi-check-circle-fill me-2"></i>Спасибо! Ваша заявка успешно отправлена. Мы свяжемся с вами в ближайшее время.
                    </div>
                `;
                orderForm.reset();
                setTimeout(() => {
                    if (bsOrderModal) bsOrderModal.hide();
                }, 2500);
            });
        });
    }
});
</script>

<section class="events-section section-bg section-padding" id="section_4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12 text-center mx-auto mb-lg-5 mb-4">
                <h2><span>{{ __('Обслуживание') }}</span> {{ __('кондиционеров') }}</h2>
                <p class="text-muted fs-5 mb-0">{{ __('Профессиональный сервис, диагностика, чистка и заправка оборудования') }}</p>
            </div>
        </div>

        <!-- Service Carousel Wrapper -->
        <div class="ac-carousel-container position-relative">
            <button class="ac-carousel-btn ac-carousel-prev" id="serviceCarouselPrev" aria-label="Previous">
                <i class="bi-chevron-left"></i>
            </button>
            <button class="ac-carousel-btn ac-carousel-next" id="serviceCarouselNext" aria-label="Next">
                <i class="bi-chevron-right"></i>
            </button>

            <div class="ac-carousel-track-container overflow-hidden">
                <div class="ac-carousel-track d-flex" id="serviceCarouselTrack">
                    
                    <!-- Card 1: Cleaning & Sanitization -->
                    <div class="ac-card-wrapper">
                        <div class="ac-card ac-card-white h-100 d-flex flex-column">
                            <div class="ac-card-img-slider position-relative" data-media='[{"type":"image","src":"{{ asset("images/cleaning/cleaning1.jpg") }}"},{"type":"image","src":"{{ asset("images/cleaning/cleanin2.jpg") }}"},{"type":"image","src":"{{ asset("images/cleaning/cleaning3.jpg") }}"},{"type":"video","src":"{{ asset("images/cleaning/cleaning1.mp4") }}"}]'>
                                <img src="{{ asset('images/cleaning/cleaning1.jpg') }}" class="ac-card-img img-fluid" alt="Чистка кондиционеров">
                                <div class="ac-img-nav">
                                    <button type="button" class="ac-img-prev"><i class="bi-chevron-left"></i></button>
                                    <button type="button" class="ac-img-next"><i class="bi-chevron-right"></i></button>
                                </div>
                                <div class="ac-img-dots">
                                    <span class="dot active"></span>
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                </div>
                                <span class="badge ac-badge-brand">{{ __('Чистка') }}</span>
                                <button type="button" class="badge ac-media-badge ac-play-video-btn"><i class="bi-play-circle-fill me-1"></i>Видео</button>
                            </div>
                            <div class="ac-card-body d-flex flex-column flex-grow-1 p-4">
                                <h4 class="ac-card-title mb-2">{{ __('Чистка и дезинфекция кондиционера') }}</h4>
                                <div class="ac-specs-pills d-flex flex-wrap gap-2 mb-3">
                                    <span class="badge ac-spec-pill"><i class="bi-clock-fill me-1"></i>1 - 1.5 часа</span>
                                    <span class="badge ac-spec-pill"><i class="bi-shield-fill-check me-1"></i>Антибактериальная</span>
                                    <span class="badge ac-spec-pill"><i class="bi-droplet-fill me-1"></i>Пром под давлением</span>
                                </div>
                                <p class="ac-card-desc flex-grow-1 mb-3">Глубокая очистка внутреннего и наружного блоков, дезинфекция паром, промывка теплообменников и обработка фильтров.</p>
                                <div class="ac-card-footer border-top pt-3 mt-auto d-flex flex-column gap-3">
                                    <div class="ac-price-wrap">
                                        <span class="ac-price-label text-muted small d-block">{{ __('Стоимость услуги') }}</span>
                                        <span class="ac-price-value fs-4 fw-bold">{{ __('от') }} 60 €</span>
                                    </div>
                                    <button class="btn custom-btn w-100 open-order-modal" 
                                            data-model="Чистка и дезинфекция кондиционера"
                                            data-price="от 60 €"
                                            data-power="Глубокая чистка 2 блоков + пара"
                                            style="color: #000;">
                                        {{ __('Заказать обслуживание') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2: Freon Refill -->
                    <div class="ac-card-wrapper">
                        <div class="ac-card ac-card-white h-100 d-flex flex-column">
                            <div class="ac-card-img-slider position-relative" data-media='[{"type":"image","src":"{{ asset("images/cleaning/load_freon1.jpg") }}"},{"type":"image","src":"{{ asset("images/cleaning/load_freon2.jpg") }}"},{"type":"image","src":"{{ asset("images/cleaning/load_freon3.jpg") }}"},{"type":"video","src":"{{ asset("images/cleaning/cleaning2.mp4") }}"}]'>
                                <img src="{{ asset('images/cleaning/load_freon1.jpg') }}" class="ac-card-img img-fluid" alt="Заправка фреоном">
                                <div class="ac-img-nav">
                                    <button type="button" class="ac-img-prev"><i class="bi-chevron-left"></i></button>
                                    <button type="button" class="ac-img-next"><i class="bi-chevron-right"></i></button>
                                </div>
                                <div class="ac-img-dots">
                                    <span class="dot active"></span>
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                </div>
                                <span class="badge ac-badge-brand">{{ __('Фреон') }}</span>
                                <button type="button" class="badge ac-media-badge ac-play-video-btn"><i class="bi-play-circle-fill me-1"></i>Видео</button>
                            </div>
                            <div class="ac-card-body d-flex flex-column flex-grow-1 p-4">
                                <h4 class="ac-card-title mb-2">{{ __('Заправка фреоном R32 / R410A') }}</h4>
                                <div class="ac-specs-pills d-flex flex-wrap gap-2 mb-3">
                                    <span class="badge ac-spec-pill"><i class="bi-search me-1"></i>Поиск утечек</span>
                                    <span class="badge ac-spec-pill"><i class="bi-snow me-1"></i>Хладагент R32/R410A</span>
                                    <span class="badge ac-spec-pill"><i class="bi-speedometer2 me-1"></i>Вакуумирование</span>
                                </div>
                                <p class="ac-card-desc flex-grow-1 mb-3">Проверка трассы на герметичность, устранение микроутечек, вакуумирование контура и заправка фреона по весам.</p>
                                <div class="ac-card-footer border-top pt-3 mt-auto d-flex flex-column gap-3">
                                    <div class="ac-price-wrap">
                                        <span class="ac-price-label text-muted small d-block">{{ __('Стоимость услуги') }}</span>
                                        <span class="ac-price-value fs-4 fw-bold">{{ __('от') }} 75 €</span>
                                    </div>
                                    <button class="btn custom-btn w-100 open-order-modal" 
                                            data-model="Заправка фреоном R32 / R410A"
                                            data-price="от 75 €"
                                            data-power="Поиск утечек + Заправка по весам"
                                            style="color: #000;">
                                        {{ __('Заказать обслуживание') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3: Diagnostics & Repair -->
                    <div class="ac-card-wrapper">
                        <div class="ac-card ac-card-white h-100 d-flex flex-column">
                            <div class="ac-card-img-slider position-relative" data-media='[{"type":"image","src":"{{ asset("images/cleaning/cleaning3.jpg") }}"},{"type":"image","src":"{{ asset("images/cleaning/cleaning1.jpg") }}"},{"type":"video","src":"{{ asset("images/cleaning/cleaning3.mp4") }}"}]'>
                                <img src="{{ asset('images/cleaning/cleaning3.jpg') }}" class="ac-card-img img-fluid" alt="Диагностика и ремонт">
                                <div class="ac-img-nav">
                                    <button type="button" class="ac-img-prev"><i class="bi-chevron-left"></i></button>
                                    <button type="button" class="ac-img-next"><i class="bi-chevron-right"></i></button>
                                </div>
                                <div class="ac-img-dots">
                                    <span class="dot active"></span>
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                </div>
                                <span class="badge ac-badge-brand">{{ __('Ремонт') }}</span>
                                <button type="button" class="badge ac-media-badge ac-play-video-btn"><i class="bi-play-circle-fill me-1"></i>Видео</button>
                            </div>
                            <div class="ac-card-body d-flex flex-column flex-grow-1 p-4">
                                <h4 class="ac-card-title mb-2">{{ __('Диагностика и ремонт кондиционеров') }}</h4>
                                <div class="ac-specs-pills d-flex flex-wrap gap-2 mb-3">
                                    <span class="badge ac-spec-pill"><i class="bi-cpu-fill me-1"></i>Компьютерная</span>
                                    <span class="badge ac-spec-pill"><i class="bi-tools me-1"></i>Срочный выезд</span>
                                    <span class="badge ac-spec-pill"><i class="bi-check-all me-1"></i>Гарантия</span>
                                </div>
                                <p class="ac-card-desc flex-grow-1 mb-3">Компьютерная диагностика платы управления, проверка компрессора, устранение течи дренажа и замена запчастей.</p>
                                <div class="ac-card-footer border-top pt-3 mt-auto d-flex flex-column gap-3">
                                    <div class="ac-price-wrap">
                                        <span class="ac-price-label text-muted small d-block">{{ __('Стоимость услуги') }}</span>
                                        <span class="ac-price-value fs-4 fw-bold">{{ __('от') }} 50 €</span>
                                    </div>
                                    <button class="btn custom-btn w-100 open-order-modal" 
                                            data-model="Диагностика и ремонт кондиционеров"
                                            data-price="от 50 €"
                                            data-power="Диагностика + Устранение неполадок"
                                            style="color: #000;">
                                        {{ __('Заказать обслуживание') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4: Comprehensive Maintenance -->
                    <div class="ac-card-wrapper">
                        <div class="ac-card ac-card-white h-100 d-flex flex-column">
                            <div class="ac-card-img-slider position-relative" data-media='[{"type":"image","src":"{{ asset("images/cleaning/cleanin2.jpg") }}"},{"type":"image","src":"{{ asset("images/cleaning/load_freon1.jpg") }}"},{"type":"video","src":"{{ asset("images/cleaning/clening4.mp4") }}"}]'>
                                <img src="{{ asset('images/cleaning/cleanin2.jpg') }}" class="ac-card-img img-fluid" alt="Комплексное ТО">
                                <div class="ac-img-nav">
                                    <button type="button" class="ac-img-prev"><i class="bi-chevron-left"></i></button>
                                    <button type="button" class="ac-img-next"><i class="bi-chevron-right"></i></button>
                                </div>
                                <div class="ac-img-dots">
                                    <span class="dot active"></span>
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                </div>
                                <span class="badge ac-badge-brand">{{ __('Комплекс') }}</span>
                                <button type="button" class="badge ac-media-badge ac-play-video-btn"><i class="bi-play-circle-fill me-1"></i>Видео</button>
                            </div>
                            <div class="ac-card-body d-flex flex-column flex-grow-1 p-4">
                                <h4 class="ac-card-title mb-2">{{ __('Комплексное техническое обслуживание (ТО)') }}</h4>
                                <div class="ac-specs-pills d-flex flex-wrap gap-2 mb-3">
                                    <span class="badge ac-spec-pill"><i class="bi-star-fill me-1"></i>Все включено</span>
                                    <span class="badge ac-spec-pill"><i class="bi-shield-lock-fill me-1"></i>Гарантия 12 мес</span>
                                    <span class="badge ac-spec-pill"><i class="bi-lightning-charge me-1"></i>Проверка 15 точ</span>
                                </div>
                                <p class="ac-card-desc flex-grow-1 mb-3">Полный сервис: промывка двух блоков, антибактериальная дезинфекция, замер давления фреона, протяжка контактов.</p>
                                <div class="ac-card-footer border-top pt-3 mt-auto d-flex flex-column gap-3">
                                    <div class="ac-price-wrap">
                                        <span class="ac-price-label text-muted small d-block">{{ __('Стоимость услуги') }}</span>
                                        <span class="ac-price-value fs-4 fw-bold">{{ __('от') }} 110 €</span>
                                    </div>
                                    <button class="btn custom-btn w-100 open-order-modal" 
                                            data-model="Комплексное техническое обслуживание (ТО)"
                                            data-price="от 110 €"
                                            data-power="Полный комплекс Все включено"
                                            style="color: #000;">
                                        {{ __('Заказать обслуживание') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-section" id="section_5" style="padding: 48px 0 40px;">
    <div class="container">
        <div class="row align-items-center g-4">

            <!-- Form -->
            <div class="col-lg-5 col-12">
                <form action="#" method="post" class="custom-form contact-form" role="form">
                    @csrf
                    <h2 class="mb-3 pb-0">{{ __('Write to us') }}</h2>

                    <div class="row g-2">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-floating">
                                <input type="text" name="full-name" id="full-name" class="form-control" placeholder="{{ __('Full Name') }}" required="">
                                <label for="full-name">{{ __('Full Name') }}</label>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-floating">
                                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="{{ __('Email address') }}" required="">
                                <label for="email">{{ __('Email address') }}</label>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12">
                            <div class="form-floating">
                                <textarea class="form-control" id="message" name="message" placeholder="{{ __('Describe message here') }}" style="height: 90px;"></textarea>
                                <label for="message">{{ __('Message') }}</label>
                            </div>
                            <button type="submit" class="form-control">{{ __('Submit Form') }}</button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Contact Info + Map -->
            <div class="col-lg-6 col-12 offset-lg-1">
                <div class="contact-info" style="min-height: 220px;">
                    <div class="contact-info-item">
                        <div class="contact-info-body">
                            <strong>{{ __('Service Area: Lisboa, Setúbal, Margem Sul') }}</strong>
                            <p class="mt-2 mb-1">
                                <a href="tel:+351964446269" class="contact-link">964 446 269</a>
                            </p>
                            <p class="mb-0">
                                <a href="mailto:breezartclima@gmail.com" class="contact-link">breezartclima@gmail.com</a>
                            </p>
                        </div>
                        <div class="contact-info-footer">
                            <a href="https://wa.me/351964446269" target="_blank">{{ __('WhatsApp') }}</a>
                        </div>
                    </div>
                    <img src="{{ asset('images/WorldMap.svg') }}" class="img-fluid" alt="" style="max-height: 220px; width: 100%; object-fit: contain;">
                </div>
            </div>

        </div>
    </div>
</section>
@endsection