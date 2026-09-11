@extends('layouts.app')

@section('title', 'DHONDYS BARBERSHOP | Premium Grooming')

@section('content')
    <!-- Hero -->
    <x-hero />

    <!-- Features Section -->
    <section id="features" class="py-24 max-w-7xl mx-auto px-6">
        <div class="section-header">
            <span class="section-subtitle">Why Choose Us</span>
            <h2 class="section-title">Craftsmanship in Every Cut</h2>
        </div>
        <div class="grid md:grid-cols-3 gap-6">
            <x-feature-card icon="💈" title="Master Barbers" description="Licensed professionals trained in modern precision fading and classic straight-razor cuts." />
            <x-feature-card icon="☕" title="Complimentary Drink" description="Enjoy craft beer, espresso, or top-shelf whiskey with every service." />
            <x-feature-card icon="📅" title="Easy Booking" description="Seamless online scheduling system so you never wait in a line." />
            <x-feature-card icon="🧼" title="Hot Towel Treatment" description="Relaxing essential oil infused hot towel shaves for every customer." />
            <x-feature-card icon="🧴" title="Premium Products" description="We exclusively stock high-grade pomades, beard oils, and skincare items." />
            <x-feature-card icon="🎧" title="Modern Atmosphere" description="Curated audio playlists and sleek, minimalist modern lounge styling." />
        </div>
    </section>

    <!-- Product / Shop Showcase Section -->
    <section id="showcase" class="py-24 bg-neutral-950 border-y border-neutral-800">
        <div class="max-w-7xl mx-auto px-6">
            <div class="section-header">
                <span class="section-subtitle">Experience The Cut</span>
                <h2 class="section-title">The Studio Showcase</h2>
            </div>
            <div class="grid md:grid-cols-3 gap-6">
                <div>
                    <img src="{{ asset('images/showcase1.jpg') }}" alt="Main Styling Bay" class="w-full h-64 object-cover border border-neutral-800">
                    <h3 class="mt-4 text-sm font-bold uppercase text-white">Main Styling Bay</h3>
                </div>
                <div>
                    <img src="{{ asset('images/showcase2.jpg') }}" alt="Precision Tools" class="w-full h-64 object-cover border border-neutral-800">
                    <h3 class="mt-4 text-sm font-bold uppercase text-white">Precision Tools</h3>
                </div>
                <div>
                    <img src="{{ asset('images/showcase3.jpg') }}" alt="Lounge Area" class="w-full h-64 object-cover border border-neutral-800">
                    <h3 class="mt-4 text-sm font-bold uppercase text-white">Lounge Area</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-24 max-w-7xl mx-auto px-6">
        <div class="section-header">
            <span class="section-subtitle">Services Menu</span>
            <h2 class="section-title">Fair & Transparent Rates</h2>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <x-pricing-card 
                plan="Standard Cut" 
                price="35" 
                :features="['Consultation', 'Precision Haircut', 'Styling & Product', 'Hot Towel Finish']" 
            />
            <x-pricing-card 
                plan="The Dhondy Executive" 
                price="65" 
                :featured="true"
                :features="['Haircut & Line-up', 'Beard Trim / Hot Razor Shave', 'Scalp Massage', 'Complimentary Drink', 'Free Touch-up within 10 Days']" 
            />
            <x-pricing-card 
                plan="Beard Care & Shave" 
                price="30" 
                :features="['Hot Towel Prep', 'Straight Razor Beard Sculpting', 'Beard Conditioning Oil', 'Cold Towel Pore Refiner']" 
            />
        </div>
    </section>

    <!-- Testimonials -->
    <section id="testimonials" class="py-24 bg-neutral-950 border-y border-neutral-800">
        <div class="max-w-7xl mx-auto px-6">
            <div class="section-header">
                <span class="section-subtitle">Client Feedback</span>
                <h2 class="section-title">What They Say</h2>
            </div>
            <div class="grid md:grid-cols-3 gap-6">
                <x-testimonial-card 
                    name="Jiyan" 
                    position="Regular Client" 
                    review="Best haircut experience in the city. The attention to detail during the razor fade is unmatched." 
                    :photo="asset('images/Jiyan.jpg')"
                />
                <x-testimonial-card 
                    name="Rover" 
                    position="Regular Client" 
                    review="Incredible modern vibe and excellent customer service. The booking process is friction-free." 
                    :photo="asset('images/Rover.jpg')"
                />
                <x-testimonial-card 
                    name="Nobunaga" 
                    position="Regular Client" 
                    review="Clean, quiet, and extremely professional. The hot towel shave service is worth every single penny." 
                    :photo="asset('images/Nobunaga.jpg')"
                />
            </div>
        </div>
    </section>

    <footer id="contact" class="bg-black border-t border-neutral-800 py-12">
        <!-- Footer content -->
    </footer>

    <!-- Call to Action -->
    <section class="py-20 max-w-5xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-extrabold uppercase tracking-tight text-white mb-4">Ready for an Upgrade?</h2>
        <p class="text-neutral-400 mb-8 max-w-xl mx-auto">Book your appointment now to secure your slot with our master barbers.</p>
        <x-button href="#booking" type="primary">Book Your Slot</x-button>
    </section>
@endsection