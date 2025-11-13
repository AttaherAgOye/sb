@extends('layouts.app')

@section('title', 'Contact - Sabou-Gnouma SARL')

@section('content')
<div class="h-20"></div>

<!-- Hero Section Premium -->
<section class="relative h-[500px] md:h-[600px] overflow-hidden hero-section" style="background-image: url('/images/gallery/IMG_1838.JPG'); background-size: cover; background-position: center;">
    <div class="hero-overlay"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-teal-900/80 to-transparent"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center relative z-10">
        <div class="hero-content max-w-4xl">
            <div class="inline-block mb-4 px-6 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/30 zoom-in">
                <span class="text-sm font-bold text-white tracking-wide flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    CONTACT & DEVIS
                </span>
            </div>
            <h1 class="text-5xl md:text-7xl font-bold mb-6 text-white fade-in leading-tight">
                Contactez-<span class="text-transparent bg-clip-text bg-gradient-to-r from-teal-300 to-cyan-300">Nous</span>
            </h1>
            <p class="text-2xl md:text-3xl font-light mb-6 text-teal-100 fade-in-delay">Nous sommes à votre écoute pour répondre à tous vos besoins</p>
            <p class="text-lg text-teal-200 mb-8 fade-in-delay-2">Des experts dédiés pour des solutions sur mesure</p>
            
            <div class="flex flex-wrap gap-4 mb-8 fade-in-delay-3">
                <div class="flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/20">
                    <svg class="w-5 h-5 text-teal-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span class="text-white font-medium">Réponse Rapide</span>
                </div>
                <div class="flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/20">
                    <svg class="w-5 h-5 text-cyan-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span class="text-white font-medium">Devis Gratuit</span>
                </div>
                <div class="flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/20">
                    <svg class="w-5 h-5 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                    <span class="text-white font-medium">Experts Dédiés</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section principale de contact -->
<section class="premium-section bg-gradient-to-b from-white to-gray-50 relative overflow-hidden">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-gradient-to-br from-teal-50 via-cyan-50 to-transparent rounded-full blur-3xl opacity-20"></div>
    
    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="text-center mb-16 fade-in-section">
            <div class="inline-block mb-4 px-6 py-2 bg-gradient-to-r from-teal-50 to-cyan-50 rounded-full border border-teal-200">
                <span class="text-sm font-bold text-gray-700 tracking-wide flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                    </svg>
                    PRISE DE CONTACT
                </span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Parlons de Votre <span class="text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-cyan-600">Projet</span></h2>
            <p class="text-xl text-gray-600">Nos experts vous accompagnent pour des solutions sur mesure</p>
        </div>
        
        <!-- Informations de contact en haut -->
        <div class="grid md:grid-cols-3 gap-8 mb-16">
            <!-- Email Principal -->
            <div class="info-card bg-white rounded-2xl shadow-lg p-6 text-center border border-gray-100 hover:shadow-xl transition-all duration-300">
                <div class="w-16 h-16 bg-gradient-to-br from-teal-500 to-teal-600 rounded-2xl flex items-center justify-center mb-4 mx-auto">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Email Principal</h3>
                <p class="text-gray-600 mb-2">contact@sabougnouma.ml</p>
                <p class="text-gray-500 text-sm">Réponse sous 24h</p>
            </div>
            
            <!-- Email Info -->
            <div class="info-card bg-white rounded-2xl shadow-lg p-6 text-center border border-gray-100 hover:shadow-xl transition-all duration-300">
                <div class="w-16 h-16 bg-gradient-to-br from-cyan-500 to-cyan-600 rounded-2xl flex items-center justify-center mb-4 mx-auto">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Informations</h3>
                <p class="text-gray-600 mb-2">info@sabougnouma.ml</p>
                <p class="text-gray-500 text-sm">Questions générales</p>
            </div>
            
            <!-- Téléphone -->
            <div class="info-card bg-white rounded-2xl shadow-lg p-6 text-center border border-gray-100 hover:shadow-xl transition-all duration-300">
                <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center mb-4 mx-auto">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Téléphone</h3>
                <p class="text-gray-600 mb-2">70-24-09-09</p>
                <p class="text-gray-500 text-sm">Lun-Ven 8h-18h</p>
            </div>
        </div>
        
        <div class="grid lg:grid-cols-3 gap-12">
            <!-- Formulaire de contact -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-2xl shadow-xl p-8 border border-gray-100">
                    <div class="flex items-center gap-3 mb-8">
                        <div class="w-12 h-12 bg-teal-500 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900">Envoyez-nous un message</h3>
                            <p class="text-gray-600">Nous vous répondrons dans les plus brefs délais</p>
                        </div>
                    </div>
                    <form class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Nom complet *</label>
                                <input type="text" id="name" name="name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-200 hover:border-gray-400">
                            </div>
                            
                            <div>
                                <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email *</label>
                                <input type="email" id="email" name="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-200 hover:border-gray-400">
                            </div>
                        </div>
                        
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">Téléphone</label>
                                <input type="tel" id="phone" name="phone" placeholder="70-24-09-09" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-200 hover:border-gray-400">
                            </div>
                            
                            <div>
                                <label for="service" class="block text-sm font-semibold text-gray-700 mb-2">Service concerné</label>
                                <select id="service" name="service" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-200 hover:border-gray-400">
                                    <option value="">-- Sélectionnez un service --</option>
                                    <option value="clean">SABOU-CLEAN - Propreté & Entretien</option>
                                    <option value="event">SABOU-EVENT - Décoration & Événementiel</option>
                                    <option value="food">SABOU-FOOD - Restauration & Traiteur</option>
                                    <option value="agro">SABOU-AGRO - Agrobusiness</option>
                                    <option value="academy">SABOU-ACADEMY - Formation</option>
                                    <option value="general">Question générale</option>
                                </select>
                            </div>
                        </div>
                        
                        <div>
                            <label for="subject" class="block text-sm font-semibold text-gray-700 mb-2">Sujet *</label>
                            <input type="text" id="subject" name="subject" required placeholder="Objet de votre demande" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-200 hover:border-gray-400">
                        </div>
                        
                        <div>
                            <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">Message *</label>
                            <textarea id="message" name="message" rows="6" required placeholder="Décrivez votre projet ou votre demande en détail..." class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-200 hover:border-gray-400 resize-none"></textarea>
                        </div>
                        
                        <div class="flex items-center gap-3">
                            <button type="submit" class="btn-premium bg-gradient-to-r from-teal-600 to-cyan-600 text-white flex-1 py-4 text-lg font-semibold hover:from-teal-700 hover:to-cyan-700 transition-all duration-300">
                                <span class="flex items-center justify-center gap-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                                    </svg>
                                    Envoyer le message
                                </span>
                            </button>
                        </div>
                        
                        <div class="text-center text-sm text-gray-500 mt-4">
                            <p>En envoyant ce formulaire, vous acceptez que nous traitions vos données pour vous recontacter.</p>
                        </div>
                    </form>
                </div>
            </div>
            
            <!-- Localisation et infos complémentaires -->
            <div class="space-y-8">
                <!-- Carte de localisation -->
                <div class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-blue-500 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">Notre Localisation</h3>
                    </div>
                    <div class="aspect-video rounded-lg overflow-hidden bg-gray-100 mb-4">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3847.123456789!2d-8.003981590270996!3d12.650657653808594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTLCsDM5JzAyLjQiTiA4wrAwMCcxNC4zIlc!5e0!3m2!1sen!2sbf!4v1699999999999!5m2!1sen!2sbf" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <p class="text-gray-600 text-center">
                        <strong>Bamako, Mali</strong><br>
                        Coordonnées: 12.650658, -8.003982
                    </p>
                    <div class="mt-4 text-center">
                        <a href="https://www.google.com/maps?q=12.650657653808594,-8.003981590270996&z=17&hl=en" 
                           target="_blank" 
                           class="inline-flex items-center gap-2 px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                            </svg>
                            Ouvrir dans Google Maps
                        </a>
                    </div>
                </div>
                
                <!-- Horaires -->
                <div class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-orange-500 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">Horaires d'Ouverture</h3>
                    </div>
                    <div class="space-y-2 text-gray-600">
                        <div class="flex justify-between">
                            <span class="font-medium">Lundi - Vendredi</span>
                            <span>8h00 - 18h00</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="font-medium">Samedi</span>
                            <span>8h00 - 14h00</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="font-medium">Dimanche</span>
                            <span class="text-red-500">Fermé</span>
                        </div>
                    </div>
                    <div class="mt-4 p-3 bg-green-50 rounded-lg">
                        <p class="text-green-700 text-sm font-medium">
                            🟢 Actuellement ouvert - Réponse rapide garantie
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
// Intersection Observer pour animations au scroll
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        }
    });
}, observerOptions);

// Observer les sections avec fade-in
document.querySelectorAll('.fade-in-section').forEach(el => {
    observer.observe(el);
});

// Observer les cartes d'information
document.querySelectorAll('.info-card').forEach((el, index) => {
    el.style.transitionDelay = `${index * 0.1}s`;
    observer.observe(el);
});

// Animation du formulaire
const formInputs = document.querySelectorAll('input, select, textarea');
formInputs.forEach(input => {
    input.addEventListener('focus', function() {
        this.parentElement.classList.add('focused');
    });
    
    input.addEventListener('blur', function() {
        if (!this.value) {
            this.parentElement.classList.remove('focused');
        }
    });
});
</script>
@endsection
