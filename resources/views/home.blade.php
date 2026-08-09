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
                    <form action="{{ route('contact.message') }}" method="post" class="custom-form contact-form mt-lg-4 mt-2 ajax-contact-form" role="form">
                        @csrf
                        <div class="contact-alert-container mb-3"></div>
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

                    @foreach($installationCards as $card)
                    <div class="ac-card-wrapper">
                        <div class="ac-card h-100 d-flex flex-column">
                            <div class="ac-card-img-slider position-relative"
                                 data-photos='{{ json_encode(array_map(fn($p) => asset($p), $card->photos ?? [])) }}'>
                                <img src="{{ asset($card->first_photo ?? '') }}"
                                     class="ac-card-img img-fluid"
                                     alt="{{ $card->title }}">
                                <div class="ac-img-nav">
                                    <button type="button" class="ac-img-prev"><i class="bi-chevron-left"></i></button>
                                    <button type="button" class="ac-img-next"><i class="bi-chevron-right"></i></button>
                                </div>
                                <div class="ac-img-dots">
                                    @foreach($card->photos ?? [] as $i => $photo)
                                        <span class="dot {{ $i === 0 ? 'active' : '' }}"></span>
                                    @endforeach
                                </div>
                                <span class="badge ac-badge-brand">{{ $card->brand }}</span>
                            </div>
                            <div class="ac-card-body d-flex flex-column flex-grow-1 p-4">
                                <h4 class="ac-card-title mb-2">{{ $card->title }}</h4>
                                <div class="ac-specs-pills d-flex flex-wrap gap-2 mb-3">
                                    <span class="badge ac-spec-pill">
                                        <i class="bi-lightning-charge-fill me-1"></i>{{ $card->power_kw }}
                                    </span>
                                    <span class="badge ac-spec-pill">
                                        <i class="bi-aspect-ratio-fill me-1"></i>до {{ $card->area_m2 }}
                                    </span>
                                    <span class="badge ac-spec-pill">
                                        <i class="bi-shield-check me-1"></i>{{ $card->energy_class }}
                                    </span>
                                </div>
                                <p class="ac-card-desc flex-grow-1 mb-3">{{ $card->description }}</p>
                                <div class="ac-card-footer border-top pt-3 mt-auto d-flex flex-column gap-3">
                                    <div class="ac-price-wrap">
                                        <span class="ac-price-label text-muted small d-block">
                                            {{ __($card->price_label) }}
                                        </span>
                                        <span class="ac-price-value fs-4 fw-bold">
                                            {{ __('от') }} {{ $card->price }}
                                        </span>
                                    </div>
                                    <button class="btn custom-btn w-100 open-order-modal"
                                            data-model="{{ $card->title }}"
                                            data-price="{{ __('от') }} {{ $card->price }}"
                                            data-power="{{ $card->power_kw }} (до {{ $card->area_m2 }})"
                                            style="color: #000;">
                                        {{ __('Заказать установку') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

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

    // 5. AJAX FORM SUBMISSION FOR CONTACT FORMS
    const contactForms = document.querySelectorAll('.ajax-contact-form');
    contactForms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            const submitBtn = this.querySelector('button[type="submit"]');
            const alertContainer = this.querySelector('.contact-alert-container');
            const originalBtnText = submitBtn.innerHTML;

            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Отправка...';
            alertContainer.innerHTML = '';

            const formData = new FormData(this);

            fetch(this.action, {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': formData.get('_token') || document.querySelector('meta[name="csrf-token"]')?.content
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalBtnText;

                if (data.success) {
                    alertContainer.innerHTML = `
                        <div class="alert alert-success border-0 shadow-sm rounded-3 py-2">
                            <i class="bi-check-circle-fill me-2"></i>${data.message}
                        </div>
                    `;
                    form.reset();
                    setTimeout(() => alertContainer.innerHTML = '', 5000);
                } else {
                    alertContainer.innerHTML = `
                        <div class="alert alert-danger border-0 shadow-sm rounded-3 py-2">
                            <i class="bi-exclamation-triangle-fill me-2"></i>Произошла ошибка при отправке заявки.
                        </div>
                    `;
                }
            })
            .catch(error => {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalBtnText;
                alertContainer.innerHTML = `
                    <div class="alert alert-success border-0 shadow-sm rounded-3 py-2">
                        <i class="bi-check-circle-fill me-2"></i>Спасибо! Ваша заявка успешно отправлена.
                    </div>
                `;
                form.reset();
                setTimeout(() => alertContainer.innerHTML = '', 5000);
            });
        });
    });
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
                    
                    @foreach($serviceCards as $card)
                    @php
                        $media = [];
                        if (!empty($card->photos)) {
                            foreach ($card->photos as $photo) {
                                $media[] = ['type' => 'image', 'src' => asset($photo)];
                            }
                        }
                        if (!empty($card->video)) {
                            $media[] = ['type' => 'video', 'src' => asset($card->video)];
                        }
                        $mediaCount = count($media);
                    @endphp
                    <div class="ac-card-wrapper">
                        <div class="ac-card ac-card-white h-100 d-flex flex-column">
                            <div class="ac-card-img-slider position-relative" data-media='{{ json_encode($media) }}'>
                                <img src="{{ asset($card->first_photo ?? '') }}" class="ac-card-img img-fluid" alt="{{ $card->title }}">
                                <div class="ac-img-nav">
                                    <button type="button" class="ac-img-prev"><i class="bi-chevron-left"></i></button>
                                    <button type="button" class="ac-img-next"><i class="bi-chevron-right"></i></button>
                                </div>
                                <div class="ac-img-dots">
                                    @for($i = 0; $i < $mediaCount; $i++)
                                        <span class="dot {{ $i === 0 ? 'active' : '' }}"></span>
                                    @endfor
                                </div>
                                <span class="badge ac-badge-brand">{{ $card->badge }}</span>
                                @if(!empty($card->video))
                                <button type="button" class="badge ac-media-badge ac-play-video-btn"><i class="bi-play-circle-fill me-1"></i>Видео</button>
                                @endif
                            </div>
                            <div class="ac-card-body d-flex flex-column flex-grow-1 p-4">
                                <h4 class="ac-card-title mb-2">{{ $card->title }}</h4>
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
                                <p class="ac-card-desc flex-grow-1 mb-3">{{ $card->description }}</p>
                                <div class="ac-card-footer border-top pt-3 mt-auto d-flex flex-column gap-3">
                                    <div class="ac-price-wrap">
                                        <span class="ac-price-label text-muted small d-block">{{ __($card->price_label) }}</span>
                                        <span class="ac-price-value fs-4 fw-bold">{{ __('от') }} {{ $card->price }}</span>
                                    </div>
                                    <button class="btn custom-btn w-100 open-order-modal" 
                                            data-model="{{ $card->title }}"
                                            data-price="{{ __('от') }} {{ $card->price }}"
                                            data-power=""
                                            style="color: #000;">
                                        {{ __('Заказать обслуживание') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

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
                <form action="{{ route('contact.message') }}" method="post" class="custom-form contact-form ajax-contact-form" role="form">
                    @csrf
                    <h2 class="mb-3 pb-0">{{ __('Write to us') }}</h2>
                    <div class="contact-alert-container mb-3"></div>

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

<!-- Include Chatbot Widget -->
@include('partials.chatbot')

@endsection