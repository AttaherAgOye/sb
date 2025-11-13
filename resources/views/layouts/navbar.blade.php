<nav class="navbar-premium fixed w-full top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="flex items-center">
                    <span class="text-2xl font-bold text-gray-900">SABOU-GNOUMA</span>
                    <span class="ml-2 text-sm text-gray-600">SARL</span>
                </a>
            </div>
            
            <!-- Menu Desktop -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-gray-900 font-medium transition">Accueil</a>
                <a href="{{ route('identity') }}" class="text-gray-700 hover:text-gray-900 font-medium transition">Notre Identité</a>
                
                <!-- Services Dropdown -->
                <div class="relative">
                    <button id="services-button" class="text-gray-700 hover:text-gray-900 font-medium transition flex items-center">
                        Services
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div id="services-dropdown" class="hidden absolute left-0 mt-2 w-64 bg-white rounded-xl shadow-xl overflow-hidden">
                        <a href="{{ route('services.clean') }}" class="block px-4 py-3 hover:bg-blue-50 transition border-l-4 border-transparent hover:border-blue-600">
                            <div class="font-semibold text-blue-600">SABOU-CLEAN</div>
                            <div class="text-xs text-gray-600">Propreté & Entretien</div>
                        </a>
                        <a href="{{ route('services.event') }}" class="block px-4 py-3 hover:bg-purple-50 transition border-l-4 border-transparent hover:border-purple-600">
                            <div class="font-semibold text-purple-600">SABOU-EVENT</div>
                            <div class="text-xs text-gray-600">Décoration & Événements</div>
                        </a>
                        <a href="{{ route('services.food') }}" class="block px-4 py-3 hover:bg-orange-50 transition border-l-4 border-transparent hover:border-orange-600">
                            <div class="font-semibold text-orange-600">SABOU-FOOD</div>
                            <div class="text-xs text-gray-600">Restauration & Traiteur</div>
                        </a>
                        <a href="{{ route('services.agro') }}" class="block px-4 py-3 hover:bg-green-50 transition border-l-4 border-transparent hover:border-green-600">
                            <div class="font-semibold text-green-600">SABOU-AGRO</div>
                            <div class="text-xs text-gray-600">Agrobusiness</div>
                        </a>
                        <a href="{{ route('services.academy') }}" class="block px-4 py-3 hover:bg-yellow-50 transition border-l-4 border-transparent hover:border-yellow-600">
                            <div class="font-semibold text-yellow-600">SABOU-ACADEMY</div>
                            <div class="text-xs text-gray-600">Formation</div>
                        </a>
                    </div>
                </div>
                
                <a href="{{ route('partners') }}" class="text-gray-700 hover:text-gray-900 font-medium transition">Partenaires</a>
                <a href="{{ route('news') }}" class="text-gray-700 hover:text-gray-900 font-medium transition">Actualités</a>
                <a href="{{ route('contact') }}" class="btn-premium bg-gray-900 text-white px-6 py-2 rounded-lg text-sm">Contact</a>
            </div>
            
            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-gray-700 hover:text-gray-900">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Mobile menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white border-t">
        <div class="px-4 pt-2 pb-4 space-y-2">
            <a href="{{ route('home') }}" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-lg">Accueil</a>
            <a href="{{ route('identity') }}" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-lg">Notre Identité</a>
            <div class="px-3 py-2 text-gray-500 font-semibold text-sm">Services</div>
            <a href="{{ route('services.clean') }}" class="block px-6 py-2 text-blue-600 hover:bg-blue-50 rounded-lg">SABOU-CLEAN</a>
            <a href="{{ route('services.event') }}" class="block px-6 py-2 text-purple-600 hover:bg-purple-50 rounded-lg">SABOU-EVENT</a>
            <a href="{{ route('services.food') }}" class="block px-6 py-2 text-orange-600 hover:bg-orange-50 rounded-lg">SABOU-FOOD</a>
            <a href="{{ route('services.agro') }}" class="block px-6 py-2 text-green-600 hover:bg-green-50 rounded-lg">SABOU-AGRO</a>
            <a href="{{ route('services.academy') }}" class="block px-6 py-2 text-yellow-600 hover:bg-yellow-50 rounded-lg">SABOU-ACADEMY</a>
            <a href="{{ route('partners') }}" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-lg">Partenaires</a>
            <a href="{{ route('news') }}" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-lg">Actualités</a>
            <a href="{{ route('contact') }}" class="block px-3 py-2 bg-gray-900 text-white rounded-lg text-center">Contact</a>
        </div>
    </div>
</nav>
