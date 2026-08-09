<body>
    <main>
        @include('layouts.partials.nav')

        @yield('content')
    </main>

    @include('layouts.partials.footer')

    @include('layouts.partials.scripts')
</body>
