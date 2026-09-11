@props(['title', 'description', 'icon' => '✂️'])

<div class="feature-card">
    <div class="text-3xl mb-4">{{ $icon }}</div>
    <h3 class="text-xl font-bold uppercase tracking-wider text-white mb-2">{{ $title }}</h3>
    <p class="text-neutral-400 text-sm leading-relaxed">{{ $description }}</p>
</div>