<script>
    document.addEventListener('DOMContentLoaded', function() {
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

        initCarousel('acCarouselTrack', 'acCarouselPrev', 'acCarouselNext');
        initCarousel('serviceCarouselTrack', 'serviceCarouselPrev', 'serviceCarouselNext');

        document.querySelectorAll('.ac-card-img-slider').forEach(function(slider) {
            const mediaData = slider.getAttribute('data-media');
            const photosData = slider.getAttribute('data-photos');
            let mediaItems = [];

            if (mediaData) {
                mediaItems = JSON.parse(mediaData);
            } else if (photosData) {
                mediaItems = JSON.parse(photosData).map(url => ({
                    type: 'image',
                    src: url
                }));
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
    });
</script>
