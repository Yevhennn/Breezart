@php
$isHome = request()->routeIs('home') || request()->is('/');
@endphp

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
            <img src="{{ asset('images/logo.png') }}" class="navbar-brand-image img-fluid" alt="Breezart Clima  Service">
            <span class="navbar-brand-text">
                {{ __('Breezart Clima ') }}
                <small>{{ __('AC Service') }}</small>
            </span>
        </a>


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-lg-auto">
                <li class="nav-item">
                    <a class="nav-link {{ $isHome ? 'click-scroll' : '' }}" href="{{ $isHome ? '#section_1' : route('home').'#section_1' }}">{{ __('Home') }}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ $isHome ? 'click-scroll' : '' }}" href="{{ $isHome ? '#section_2' : route('home').'#section_2' }}">{{ __('About') }}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ $isHome ? 'click-scroll' : '' }}" href="{{ $isHome ? '#section_3' : route('home').'#section_3' }}">{{ __('Установка') }}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ $isHome ? 'click-scroll' : '' }}" href="{{ $isHome ? '#section_4' : route('home').'#section_4' }}">{{ __('Обслуживание') }}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ $isHome ? 'click-scroll' : '' }}" href="{{ $isHome ? '#section_5' : route('home').'#section_5' }}">{{ __('Contact Us') }}</a>
                </li>


                <li class="nav-item d-flex align-items-center ms-lg-3 mt-3 mt-lg-0">
                    <a href="{{ route('lang.switch', 'ru') }}" class="nav-link" style="padding-right: 5px; {{ app()->getLocale() == 'ru' ? 'font-weight: bold; color: var(--primary-color);' : '' }}">RU</a>
                    <span class="text-white d-none d-lg-inline">|</span>
                    <a href="{{ route('lang.switch', 'pt') }}" class="nav-link" style="padding-left: 5px; {{ app()->getLocale() == 'pt' ? 'font-weight: bold; color: var(--primary-color);' : '' }}">PT</a>
                </li>
            </ul>

        </div>
    </div>
</nav>