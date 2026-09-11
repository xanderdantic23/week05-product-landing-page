<nav class="nav-container">
    <div class="nav-wrapper px-4">
        <!-- Logo: Dynamically shrinks text on small screens -->
        <a href="#" class="nav-logo text-xs sm:text-base font-bold tracking-wider truncate max-w-[160px] sm:max-w-none">
            DHONDYS BARBERSHOP
        </a>
        
        <!-- Navigation Links: Hidden on Mobile & Tablets, Visible on Desktops (1024px+) -->
        <div class="hidden lg:flex items-center space-x-6 text-xs">
            <a href="#home" class="nav-link whitespace-nowrap">Home</a>
            <a href="#features" class="nav-link whitespace-nowrap">Features</a>
            <a href="#showcase" class="nav-link whitespace-nowrap">Showcase</a>
            <a href="#pricing" class="nav-link whitespace-nowrap">Pricing</a>
            <a href="#testimonials" class="nav-link whitespace-nowrap">Testimonials</a>
            <a href="#contact" class="nav-link whitespace-nowrap">Contact</a>
        </div>

        <!-- Action Buttons: Keeps elements neatly contained on mobile -->
        <div class="flex items-center space-x-2 shrink-0">
            <a href="#signin" class="nav-link text-[10px] sm:text-xs px-1 whitespace-nowrap">Sign In</a>
            <x-button href="#booking" type="primary" class="text-[10px] sm:text-xs py-1 px-2.5 sm:py-2 sm:px-4 whitespace-nowrap">
                <span class="hidden sm:inline">Book Appointment</span>
                <span class="sm:hidden">Book</span>
            </x-button>
        </div>
    </div>
</nav>