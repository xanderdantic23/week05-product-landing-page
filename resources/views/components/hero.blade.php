<section id="home" class="hero-section">
    <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-8 lg:gap-12 items-center">
        <!-- Text Content -->
        <div class="text-left">
            <span class="section-subtitle">Precision & Style</span>
            <h1 class="hero-title">
                Crafting Modern Gentlemen
            </h1>
            <p class="hero-subtitle text-sm sm:text-base">
                Experience high-end grooming tailored strictly to your aesthetic. Premium cuts, traditional hot towel shaves, and modern styling.
            </p>
            <div class="flex flex-wrap gap-3 sm:gap-4">
                <x-button href="#pricing" type="primary">View Services</x-button>
                <x-button href="#showcase" type="secondary">Explore Shop</x-button>
            </div>
        </div>

        <!-- Hero Image -->
        <div class="relative w-full mt-6 lg:mt-0">
            <img src="{{ asset('images/mainshowcase.jpg') }}" 
                 alt="Barber Shop Interior" 
                 class="w-full h-64 sm:h-80 lg:h-[450px] object-cover rounded-sm border border-neutral-800 grayscale">
        </div>
    </div>
</section>