{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-item">
    <a class="nav-link" href="{{ backpack_url('installation-cards') }}">
        <i class="la la-snowflake nav-icon"></i>
        Установка нового оборудования
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ backpack_url('service-cards') }}">
        <i class="la la-tools nav-icon"></i>
        Обслуживание оборудования
    </a>
</li>
