@extends('layouts.app')

@section('title', 'SABOU-ACADEMY - Formation & Développement')

@section('content')
<div class="h-20"></div>

<!-- Bannière Hero Premium -->
<section class="relative h-[500px] md:h-[600px] overflow-hidden hero-section" style="background-image: url('/images/gallery/IMG_1834.JPG'); background-size: cover; background-position: center;">
    <div class="hero-overlay"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-yellow-900/80 to-transparent"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center relative z-10">
        <div class="hero-content max-w-4xl">
            <div class="inline-block mb-4 px-6 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/30 zoom-in">
                <span class="text-sm font-bold text-white tracking-wide flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                    FORMATION PREMIUM
                </span>
            </div>
            <h1 class="text-5xl md:text-7xl font-bold mb-6 text-white fade-in leading-tight">
                SABOU-<span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 to-orange-300">ACADEMY</span>
            </h1>
            <p class="text-2xl md:text-3xl font-light mb-6 text-yellow-100 fade-in-delay">Chaque talent mérite d'être révélé.</p>
            <p class="text-lg text-yellow-200 mb-8 fade-in-delay-2">Formation & Développement des compétences</p>
            
            <div class="flex flex-wrap gap-4 mb-8 fade-in-delay-3">
                <div class="flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/20">
                    <svg class="w-5 h-5 text-yellow-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span class="text-white font-medium">Certifié Qualité</span>
                </div>
                <div class="flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/20">
                    <svg class="w-5 h-5 text-yellow-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                    <span class="text-white font-medium">Formateurs Experts</span>
                </div>
                <div class="flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/20">
                    <svg class="w-5 h-5 text-yellow-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                    <span class="text-white font-medium">Résultats Garantis</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Présentation -->
<section class="premium-section bg-gradient-to-b from-white to-gray-50 relative overflow-hidden">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-gradient-to-br from-yellow-50 via-orange-50 to-transparent rounded-full blur-3xl opacity-20"></div>
    
    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="text-center mb-16 fade-in-section">
            <div class="inline-block mb-4 px-6 py-2 bg-gradient-to-r from-yellow-50 to-orange-50 rounded-full border border-yellow-200">
                <span class="text-sm font-bold text-gray-700 tracking-wide flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                    EXCELLENCE PÉDAGOGIQUE
                </span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Former les <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-600 to-orange-600">talents</span> de demain</h2>
            <p class="text-xl text-gray-600">Compétences, excellence et employabilité durable</p>
        </div>
        
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <p class="institutional-text mb-6 leading-relaxed">
                    SABOU-ACADEMY conçoit et déploie des <span class="font-semibold text-gray-900">programmes de formation professionnelle</span> dans les métiers 
                    de la propreté, l'hôtellerie, la restauration, l'agriculture et le management. Notre mission : 
                    révéler et développer les compétences.
                </p>
                <p class="institutional-text mb-8 leading-relaxed">
                    Avec une pédagogie moderne et des formateurs expérimentés, nous accompagnons chaque apprenant 
                    vers l'<span class="font-semibold text-transparent bg-clip-text bg-gradient-to-r from-yellow-600 to-orange-600">excellence professionnelle</span> et l'employabilité durable.
                </p>
                
                <!-- Mini statistiques -->
                <div class="grid grid-cols-3 gap-4">
                    <div class="text-center p-4 bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-xl">
                        <div class="text-2xl font-bold text-yellow-600">500+</div>
                        <div class="text-xs text-gray-600 font-medium">Formés</div>
                    </div>
                    <div class="text-center p-4 bg-gradient-to-br from-orange-50 to-orange-100 rounded-xl">
                        <div class="text-2xl font-bold text-orange-600">15+</div>
                        <div class="text-xs text-gray-600 font-medium">Programmes</div>
                    </div>
                    <div class="text-center p-4 bg-gradient-to-br from-green-50 to-green-100 rounded-xl">
                        <div class="text-2xl font-bold text-green-600">95%</div>
                        <div class="text-xs text-gray-600 font-medium">Employabilité</div>
                    </div>
                </div>
            </div>
            <div class="relative h-96 rounded-2xl overflow-hidden shadow-2xl group bg-gradient-to-br from-yellow-50 to-orange-50 flex items-center justify-center">
                <!-- Animation Lottie ACADEMY -->
                <div class="lottie-container relative z-10 group-hover:scale-105 transition-transform duration-500">
                    <iframe 
                        src="https://lottie.host/embed/5e41953f-0ae3-4d8d-b6a9-89a68eb479b6/t4W60PBLeq.lottie" 
                        style="width: 320px; height: 320px; border: none; background: transparent;" 
                        allowfullscreen>
                    </iframe>
                </div>
                
                <!-- Overlay avec info -->
                <div class="absolute inset-0 bg-gradient-to-t from-yellow-600/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                    <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center mb-3">
                        <svg class="w-6 h-6 text-yellow-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Formation Premium</h3>
                    <p class="text-yellow-100 text-sm">Excellence pédagogique et compétences certifiées</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Nos offres -->
<section class="premium-section bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-gray-900 mb-16">Nos Programmes de Formation</h2>
        
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-2xl shadow-lg">
                <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mb-6">
                    <span class="text-3xl">🧹</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Métiers de la Propreté</h3>
                <ul class="space-y-3 text-gray-600">
                    <li>✓ Techniques de nettoyage</li>
                    <li>✓ Hygiène & sécurité</li>
                    <li>✓ Gestion du matériel</li>
                    <li>✓ Certification professionnelle</li>
                </ul>
            </div>
            
            <div class="bg-white p-8 rounded-2xl shadow-lg">
                <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mb-6">
                    <span class="text-3xl">🍳</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Hôtellerie & Restauration</h3>
                <ul class="space-y-3 text-gray-600">
                    <li>✓ Arts culinaires</li>
                    <li>✓ Service en salle</li>
                    <li>✓ Pâtisserie professionnelle</li>
                    <li>✓ Management hôtelier</li>
                </ul>
            </div>
            
            <div class="bg-white p-8 rounded-2xl shadow-lg">
                <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mb-6">
                    <span class="text-3xl">💼</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Compétences Transversales</h3>
                <ul class="space-y-3 text-gray-600">
                    <li>✓ Leadership & management</li>
                    <li>✓ Communication professionnelle</li>
                    <li>✓ Gestion de projet</li>
                    <li>✓ Entrepreneuriat</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Équipe -->
<section class="premium-section bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-gray-900 mb-6">Notre Corps Pédagogique</h2>
        <p class="text-center text-xl text-gray-600 mb-16 max-w-3xl mx-auto">
            Des formateurs expérimentés et passionnés par la transmission de savoirs
        </p>
        
        <div class="grid md:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="w-32 h-32 bg-yellow-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-4xl">👨‍🏫</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Formateurs Experts</h3>
                <p class="text-gray-600">15+ ans d'expérience</p>
            </div>
            
            <div class="text-center">
                <div class="w-32 h-32 bg-yellow-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-4xl">📚</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Programme Certifié</h3>
                <p class="text-gray-600">Reconnu par l'État</p>
            </div>
            
            <div class="text-center">
                <div class="w-32 h-32 bg-yellow-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-4xl">🎓</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Diplômes</h3>
                <p class="text-gray-600">Certifications officielles</p>
            </div>
            
            <div class="text-center">
                <div class="w-32 h-32 bg-yellow-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-4xl">🤝</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Placement</h3>
                <p class="text-gray-600">Accompagnement emploi</p>
            </div>
        </div>
    </div>
</section>

<!-- Impact -->
<section class="premium-section bg-yellow-600 text-white">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-16">SABOU-ACADEMY en Chiffres</h2>
        
        <div class="grid md:grid-cols-4 gap-8 text-center">
            <div>
                <div class="text-5xl font-bold mb-2">500+</div>
                <div class="text-xl text-yellow-100">Apprenants formés</div>
            </div>
            <div>
                <div class="text-5xl font-bold mb-2">15+</div>
                <div class="text-xl text-yellow-100">Programmes actifs</div>
            </div>
            <div>
                <div class="text-5xl font-bold mb-2">85%</div>
                <div class="text-xl text-yellow-100">Taux d'insertion</div>
            </div>
            <div>
                <div class="text-5xl font-bold mb-2">10+</div>
                <div class="text-xl text-yellow-100">Partenaires entreprises</div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="premium-section bg-gray-50">
    <div class="max-w-4xl mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-gray-900 mb-16">Questions Fréquentes</h2>
        
        <div class="space-y-6">
            <div class="bg-white p-6 rounded-xl shadow">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Quels sont les prérequis pour s'inscrire ?</h3>
                <p class="text-gray-600">Cela dépend du programme. Certaines formations sont ouvertes à tous, d'autres requièrent un niveau scolaire minimal.</p>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Les formations sont-elles certifiantes ?</h3>
                <p class="text-gray-600">Oui, toutes nos formations délivrent des attestations ou diplômes reconnus par les autorités compétentes.</p>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Proposez-vous des formations en entreprise ?</h3>
                <p class="text-gray-600">Absolument. Nous intervenons directement dans vos locaux pour des formations sur mesure adaptées à vos besoins.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="premium-section bg-white">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold text-gray-900 mb-6">Prêt à développer vos compétences ?</h2>
        <p class="text-xl text-gray-600 mb-8">Rejoignez SABOU-ACADEMY et investissez dans votre avenir professionnel</p>
        <a href="{{ route('contact') }}" class="btn-premium bg-yellow-600 text-white inline-block">S'inscrire</a>
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

// Observer les cartes de service
document.querySelectorAll('.service-card').forEach((el, index) => {
    el.style.transitionDelay = `${index * 0.1}s`;
    observer.observe(el);
});

// Observer les cartes de statistiques
document.querySelectorAll('.stats-card').forEach((el, index) => {
    el.style.transitionDelay = `${index * 0.15}s`;
    observer.observe(el);
});
</script>
@endsection
