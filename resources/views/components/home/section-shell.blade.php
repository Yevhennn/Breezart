<section {{ $attributes->merge(['class' => $class ?? '']) }} @if(!empty($id)) id="{{ $id }}" @endif>
    <div class="container">
        {{ $slot }}
    </div>
</section>
