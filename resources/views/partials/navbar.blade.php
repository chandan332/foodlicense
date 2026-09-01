<nav class="bg-brand-dark w-full z-50 top-0 border-b border-gray-800 fixed">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        
        <!-- Logo and Brand Name -->
        <a href="{{ route('home') }}" class="flex items-center space-x-3 shrink-0">
            <!-- Slightly smaller logo and text on mobile -->
            <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="Legal Expert India Logo" class="h-10 md:h-12 bg-white rounded p-1">
            <span class="text-white text-lg md:text-xl font-bold tracking-wide">Legal Expert India</span>
        </a>

        <!-- Desktop Navigation (Hidden on Mobile) -->
        <div class="hidden lg:flex items-center space-x-8 text-sm font-semibold text-gray-300">
            
            <a href="{{ route('home') }}" class="text-white border-b-2 border-brand-orange pb-1">Home</a>

            <!-- Services Dropdown (Hover) -->
            <div class="relative group">
                <button class="flex items-center hover:text-white transition py-2">
                    Services 
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>

                <div class="absolute left-0 mt-0 w-72 bg-white rounded-md shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 border border-gray-100">
                    <div class="p-6 space-y-6 text-sm">
                        <!-- Category 1 -->
                        <div>
                            <h4 class="text-brand-orange font-bold uppercase tracking-wider text-xs mb-3">Business Registrations</h4>
                            <ul class="space-y-2 text-gray-600 font-medium">
                                <li><a href="#" class="hover:text-brand-orange transition block">Company Registration</a></li>
                                <li><a href="#" class="hover:text-brand-orange transition block">LLP Registration</a></li>
                                <li><a href="#" class="hover:text-brand-orange transition block">Partnership Registration</a></li>
                                <li><a href="#" class="hover:text-brand-orange transition block">Proprietorship Registration</a></li>
                                <li><a href="#" class="hover:text-brand-orange transition block">MSME / Udyam Registration</a></li>
                            </ul>
                        </div>
                        <!-- Category 2 -->
                        <div>
                            <h4 class="text-brand-orange font-bold uppercase tracking-wider text-xs mb-3">Tax & Compliance</h4>
                            <ul class="space-y-2 text-gray-600 font-medium">
                                <li><a href="{{ route('gst-registration') }}" class="hover:text-brand-orange transition block">GST Registration</a></li>
                                <li><a href="{{ route('fssai-registration') }}" class="hover:text-brand-orange transition block">FSSAI Registration & Licensing</a></li>
                                <li><a href="#" class="hover:text-brand-orange transition block">ROC Compliance & Filing</a></li>
                                <li><a href="#" class="hover:text-brand-orange transition block">Trade License Assistance</a></li>
                            </ul>
                        </div>
                        <!-- Category 3 -->
                        <div>
                            <h4 class="text-brand-orange font-bold uppercase tracking-wider text-xs mb-3">IPR & Certifications</h4>
                            <ul class="space-y-2 text-gray-600 font-medium">
                                <li><a href="{{ route('trademark-registration') }}" class="hover:text-brand-orange transition block">Trademark Registration</a></li>
                                <li><a href="#" class="hover:text-brand-orange transition block">Copyright Registration</a></li>
                                <li><a href="#" class="hover:text-brand-orange transition block">ISO Certification Assistance</a></li>
                                <li><a href="#" class="hover:text-brand-orange transition block">Import Export Code (IEC)</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <a href="#" class="hover:text-white transition">About Us</a>
            <a href="#contact" class="hover:text-white transition">Contact</a>
        </div>

        <!-- CTA Button (Desktop) -->
        <a href="#contact" class="hidden lg:block bg-brand-orange text-white px-6 py-2.5 rounded text-sm font-bold hover:bg-orange-600 transition shadow-lg shadow-orange-500/30 shrink-0">
            Get Started
        </a>

        <!-- Mobile Hamburger Button -->
        <button type="button" wire:click="toggleMobileMenu" aria-controls="mobile-menu" aria-expanded="{{ $mobileMenuOpen ? 'true' : 'false' }}" aria-label="Toggle navigation menu" class="lg:hidden text-gray-300 hover:text-white focus:outline-none ml-4">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>

    </div>

    <!-- Mobile Navigation Menu (Hidden by default) -->
    <!-- Added max-h-[calc(100vh-4rem)] and overflow-y-auto to allow scrolling on small screens -->
    <div id="mobile-menu" class="{{ $mobileMenuOpen ? '' : 'hidden' }} lg:hidden bg-brand-dark border-t border-gray-800 absolute w-full left-0 top-full shadow-2xl max-h-[calc(100vh-4rem)] overflow-y-auto">
        <div class="px-6 py-6 space-y-6">
            <a href="/" class="block text-white font-bold text-lg">Home</a>
            
            <!-- Expanded Mobile Services Section -->
            <div>
                <div class="text-white font-bold text-lg mb-4">Services</div>
                
                <div class="space-y-6 bg-gray-800/50 p-4 rounded-lg">
                    <!-- Category 1 -->
                    <div>
                        <div class="text-brand-orange font-bold text-xs uppercase tracking-wider mb-3">Business Registrations</div>
                        <div class="pl-4 space-y-3 border-l-2 border-gray-700">
                            <a href="#" class="block text-gray-400 hover:text-white transition text-sm">Company Registration</a>
                            <a href="#" class="block text-gray-400 hover:text-white transition text-sm">LLP Registration</a>
                            <a href="#" class="block text-gray-400 hover:text-white transition text-sm">Partnership Registration</a>
                            <a href="#" class="block text-gray-400 hover:text-white transition text-sm">Proprietorship Registration</a>
                            <a href="#" class="block text-gray-400 hover:text-white transition text-sm">MSME / Udyam Registration</a>
                        </div>
                    </div>

                    <!-- Category 2 -->
                    <div>
                        <div class="text-brand-orange font-bold text-xs uppercase tracking-wider mb-3">Tax & Compliance</div>
                        <div class="pl-4 space-y-3 border-l-2 border-gray-700">
                            <a wire:click="closeMobileMenu" href="{{ route('gst-registration') }}" class="block text-gray-400 hover:text-white transition text-sm">GST Registration</a>
                            <a href="{{ route('fssai-registration') }}" class="block text-gray-400 hover:text-white transition text-sm">FSSAI Registration & Licensing</a>
                            <a href="#" class="block text-gray-400 hover:text-white transition text-sm">ROC Compliance & Filing</a>
                            <a href="#" class="block text-gray-400 hover:text-white transition text-sm">Trade License Assistance</a>
                        </div>
                    </div>

                    <!-- Category 3 -->
                    <div>
                        <div class="text-brand-orange font-bold text-xs uppercase tracking-wider mb-3">IPR & Certifications</div>
                        <div class="pl-4 space-y-3 border-l-2 border-gray-700">
                            <a wire:click="closeMobileMenu" href="{{ route('trademark-registration') }}" class="block text-gray-400 hover:text-white transition text-sm">Trademark Registration</a>
                            <a href="#" class="block text-gray-400 hover:text-white transition text-sm">Copyright Registration</a>
                            <a href="#" class="block text-gray-400 hover:text-white transition text-sm">ISO Certification Assistance</a>
                            <a href="#" class="block text-gray-400 hover:text-white transition text-sm">Import Export Code (IEC)</a>
                        </div>
                    </div>
                </div>
            </div>

            <a href="#" class="block text-gray-300 hover:text-white font-bold text-lg">About Us</a>
            <a href="#contact" class="block text-gray-300 hover:text-white font-bold text-lg">Contact</a>
            
            <a href="#contact" class="block bg-brand-orange text-white text-center px-6 py-3 rounded text-lg font-bold hover:bg-orange-600 transition mt-6">
                Get Started
            </a>
        </div>
    </div>

</nav>
