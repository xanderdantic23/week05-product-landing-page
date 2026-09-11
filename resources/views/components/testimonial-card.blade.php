@props(['name', 'position', 'review', 'photo'])

<div class="testimonial-card">
    <p class="text-neutral-300 italic text-sm mb-6">"{{ $review }}"</p>
    <div class="flex items-center gap-4">
        <img src="{{ $photo }}" alt="{{ $name }}" class="w-12 h-12 rounded-full object-cover border border-neutral-700">
        <div>
            <h4 class="text-white text-sm font-bold uppercase tracking-wider">{{ $name }}</h4>
            <span class="text-neutral-500 text-xs">{{ $position }}</span>
        </div>
    </div>
</div>