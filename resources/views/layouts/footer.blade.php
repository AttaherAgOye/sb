<footer class="bg-gray-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- À propos -->
            <div>
                <h3 class="text-lg font-bold mb-4">SABOU-GNOUMA SARL</h3>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Excellence multiservices en Afrique. Discipline, Excellence, Innovation, Fiabilité, Élégance.
                </p>
            </div>
            
            <!-- Services -->
            <div>
                <h4 class="font-semibold mb-4">Nos Services</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('services.clean') }}" class="text-gray-400 hover:text-blue-400 transition">SABOU-CLEAN</a></li>
                    <li><a href="{{ route('services.event') }}" class="text-gray-400 hover:text-purple-400 transition">SABOU-EVENT</a></li>
                    <li><a href="{{ route('services.food') }}" class="text-gray-400 hover:text-orange-400 transition">SABOU-FOOD</a></li>
                    <li><a href="{{ route('services.agro') }}" class="text-gray-400 hover:text-green-400 transition">SABOU-AGRO</a></li>
                    <li><a href="{{ route('services.academy') }}" class="text-gray-400 hover:text-yellow-400 transition">SABOU-ACADEMY</a></li>
                </ul>
            </div>
            
            <!-- Liens utiles -->
            <div>
                <h4 class="font-semibold mb-4">Liens Utiles</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('identity') }}" class="text-gray-400 hover:text-white transition">Notre Identité</a></li>
                    <li><a href="{{ route('partners') }}" class="text-gray-400 hover:text-white transition">Partenaires</a></li>
                    <li><a href="{{ route('news') }}" class="text-gray-400 hover:text-white transition">Actualités</a></li>
                    <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-white transition">Contact</a></li>
                </ul>
            </div>
            
            <!-- Contact & Réseaux sociaux -->
            <div>
                <h4 class="font-semibold mb-4">Nous Contacter</h4>
                <ul class="space-y-2 text-sm text-gray-400">
                    <li>📧 contact@sabougnouma.com</li>
                    <li>📞 +226 XX XX XX XX</li>
                </ul>
                <div class="flex space-x-4 mt-4">
                    <a href="#" class="text-gray-400 hover:text-white transition">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073z"/><circle cx="12" cy="12" r="3.5"/><circle cx="18.406" cy="5.594" r="1.44"/></svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="border-t border-gray-800 mt-8 pt-8 text-center text-sm text-gray-400">
            <p>&copy; 2024 Sabou-Gnouma SARL. Tous droits réservés. | Discipline • Excellence • Innovation • Fiabilité • Élégance</p>
        </div>
    </div>
</footer>
