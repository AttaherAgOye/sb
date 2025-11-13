<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Title & Description -->
    <title>@yield('title', 'SABOUGNOUMA - Excellence Multiservices au Mali | SABOU-CLEAN, SABOU-EVENT, SABOU-FOOD, SABOU-AGRO, SABOU-ACADEMY')</title>
    <meta name="description" content="@yield('description', 'SABOUGNOUMA SARL : Leader multiservices au Mali. Nettoyage professionnel, organisation d\'événements, restauration, agrobusiness et formation. Excellence, Innovation et Fiabilité depuis plus de 10 ans.')">
    <meta name="keywords" content="SABOUGNOUMA, Mali, Bamako, nettoyage professionnel, événementiel, restauration, agrobusiness, formation, SABOU-CLEAN, SABOU-EVENT, SABOU-FOOD, SABOU-AGRO, SABOU-ACADEMY, services multiservices, excellence">
    <meta name="author" content="SABOUGNOUMA SARL">
    <meta name="robots" content="index, follow">
    <meta name="language" content="French">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/icons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/icons/favicon-16x16.png') }}">
    <link rel="shortcut icon" href="{{ asset('images/icons/favicon-16x16.png') }}">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'SABOUGNOUMA - Excellence Multiservices au Mali')">
    <meta property="og:description" content="@yield('description', 'Leader multiservices au Mali : Nettoyage, Événementiel, Restauration, Agrobusiness et Formation professionnelle.')">
    <meta property="og:image" content="{{ asset('images/icons/favicon-32x32.png') }}">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:site_name" content="SABOUGNOUMA">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('title', 'SABOUGNOUMA - Excellence Multiservices au Mali')">
    <meta property="twitter:description" content="@yield('description', 'Leader multiservices au Mali : Nettoyage, Événementiel, Restauration, Agrobusiness et Formation professionnelle.')">
    <meta property="twitter:image" content="{{ asset('images/icons/favicon-32x32.png') }}">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">
    
    <!-- Theme Color -->
    <meta name="theme-color" content="#4F46E5">
    <meta name="msapplication-TileColor" content="#4F46E5">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">
    @include('layouts.navbar')
    
    <main>
        @yield('content')
    </main>
    
    @include('layouts.footer')
    
    @stack('scripts')
    
    <script>
        // Menu mobile toggle
        document.getElementById('mobile-menu-button')?.addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
        
        // Services dropdown toggle
        document.getElementById('services-button')?.addEventListener('click', function(e) {
            e.stopPropagation();
            document.getElementById('services-dropdown').classList.toggle('hidden');
        });
        
        // Close dropdown when clicking outside
        document.addEventListener('click', function() {
            document.getElementById('services-dropdown')?.classList.add('hidden');
        });
    </script>
</body>
</html>
