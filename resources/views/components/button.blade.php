@props(['type' => 'primary', 'href' => '#'])

<a href="{{ $href }}" {{ $attributes->merge(['class' => $type === 'primary' ? 'btn-primary' : 'btn-secondary']) }}>
    {{ $slot }}
</a>