@props(['plan', 'price', 'features' => [], 'featured' => false])

<div class="{{ $featured ? 'pricing-card-featured' : 'pricing-card' }}">
    @if($featured)
        <span class="absolute -top-3 right-6 bg-white text-black text-[10px] font-bold uppercase tracking-widest px-3 py-1">Popular</span>
    @endif
    <div>
        <h3 class="text-xl font-bold uppercase tracking-widest text-white mb-2">{{ $plan }}</h3>
        <div class="text-3xl font-extrabold text-white mb-6">${{ $price }} <span class="text-xs font-normal text-neutral-400">/ session</span></div>
        <ul class="space-y-3 mb-8">
            @foreach($features as $feature)
                <li class="text-sm text-neutral-300 flex items-center gap-2">
                    <span class="text-xs">✓</span> {{ $feature }}
                </li>
            @endforeach
        </ul>
    </div>
    <x-button href="#book" type="{{ $featured ? 'primary' : 'secondary' }}" class="w-full">
        Select Package
    </x-button>
</div>