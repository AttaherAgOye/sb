# Site Web Sabou-Gnouma SARL

## 🎯 Présentation

Site web premium multiservices pour **Sabou-Gnouma SARL**, une entreprise africaine haut de gamme regroupant 5 pôles d'excellence :

- **SABOU-CLEAN** (Bleu) - Propreté & Entretien professionnel
- **SABOU-EVENT** (Violet) - Décoration & Ingénierie événementielle
- **SABOU-FOOD** (Orange) - Restauration & Traiteur professionnel
- **SABOU-AGRO** (Vert) - Agrobusiness & Projets agroalimentaires
- **SABOU-ACADEMY** (Jaune) - Formation & Développement des compétences

## 💎 Identité de Marque

**Valeurs** : Discipline • Excellence • Innovation • Fiabilité • Élégance

**Vision** : Devenir la référence multiservices premium en Afrique de l'Ouest d'ici 2030

**Emblème** : Le béret Sabou-Gnouma - symbole de discipline et d'élégance africaine

## 📄 Structure du Site

### Pages principales

1. **Accueil** (`/`)
   - Carrousel avec 5 slides (un par service)
   - Présentation de l'entreprise
   - Cartes des 5 services
   - Section partenaires
   - Actualités récentes
   - CTA final

2. **Notre Identité** (`/notre-identite`)
   - Historique de l'entreprise
   - Mission & Vision
   - Valeurs fondamentales
   - Emblème du béret
   - Engagement qualité

3. **Services** (5 pages dédiées)
   - `/services/sabou-clean`
   - `/services/sabou-event`
   - `/services/sabou-food`
   - `/services/sabou-agro`
   - `/services/sabou-academy`

4. **Partenaires & Clients** (`/partenaires-clients`)
   - Logos des partenaires
   - Témoignages clients
   - Études de cas

5. **Actualités** (`/actualites`)
   - Articles et actualités récentes

6. **Contact** (`/contact`)
   - Formulaire de contact
   - Coordonnées complètes
   - Carte de localisation
   - Réseaux sociaux

## 🎨 Design & Identité Visuelle

### Palette de couleurs

```css
--color-sabou-clean: #2563eb    /* Bleu */
--color-sabou-event: #9333ea    /* Violet */
--color-sabou-food: #ea580c     /* Orange */
--color-sabou-agro: #16a34a     /* Vert */
--color-sabou-academy: #eab308  /* Jaune */
```

### Typographie

- Police principale : **Poppins** (300, 400, 500, 600, 700, 800)
- Style : Moderne, lisible, élégant

### Caractéristiques du design

- ✅ Design premium, institutionnel et élégant
- ✅ Interface sobre avec accents colorés
- ✅ Espacement généreux et hiérarchie claire
- ✅ Animations et transitions douces
- ✅ Responsive mobile-first
- ✅ Cartes cliquables avec effet hover
- ✅ Ombres légères et coins arrondis

## 🛠️ Technologies

- **Framework** : Laravel 11
- **Frontend** : Blade + Tailwind CSS
- **Build** : Vite
- **CSS** : Tailwind CSS v4 avec variables personnalisées
- **JavaScript** : Vanilla JS pour carrousel et interactions

## 🚀 Installation & Lancement

### Prérequis

- PHP 8.2+
- Composer
- Node.js & npm

### Installation

```bash
# Installer les dépendances PHP
composer install

# Installer les dépendances Node
npm install

# Compiler les assets
npm run build

# Lancer le serveur de développement
php artisan serve
```

Le site sera accessible sur `http://127.0.0.1:8000`

### Mode développement

Pour le développement avec rechargement automatique :

```bash
# Terminal 1 : Serveur Laravel
php artisan serve

# Terminal 2 : Compilation Vite en mode watch
npm run dev
```

## 📁 Structure des Fichiers

```
resources/
├── css/
│   └── app.css                 # Styles globaux + variables Tailwind
├── js/
│   └── app.js                  # JavaScript principal
└── views/
    ├── layouts/
    │   ├── app.blade.php       # Layout principal
    │   ├── navbar.blade.php    # Navigation
    │   └── footer.blade.php    # Pied de page
    ├── services/               # Pages de services
    │   ├── clean.blade.php
    │   ├── event.blade.php
    │   ├── food.blade.php
    │   ├── agro.blade.php
    │   └── academy.blade.php
    ├── home.blade.php          # Page d'accueil
    ├── identity.blade.php      # Notre identité
    ├── partners.blade.php      # Partenaires & clients
    ├── news.blade.php          # Actualités
    └── contact.blade.php       # Contact
```

## 🎯 Fonctionnalités Implémentées

### Page d'accueil
- ✅ Carrousel automatique avec 5 slides
- ✅ Navigation par indicateurs
- ✅ Présentation institutionnelle
- ✅ Grille de services avec cartes cliquables
- ✅ Section partenaires
- ✅ Actualités récentes (3 articles)
- ✅ CTA final

### Navigation
- ✅ Navbar fixe avec effet backdrop blur
- ✅ Menu déroulant pour les services
- ✅ Menu burger responsive
- ✅ Bouton CTA "Contact" mis en avant

### Services
- ✅ Structure identique pour les 5 services
- ✅ Bannière hero avec couleur dominante
- ✅ Sections : offres, équipe, impact, FAQ
- ✅ Chiffres clés et témoignages
- ✅ CTA spécifique par service

### Design responsive
- ✅ Mobile-first
- ✅ Grilles adaptatives
- ✅ Carrousel optimisé mobile
- ✅ Menu burger pour mobile

## 🎨 Personnalisation

### Modifier les couleurs

Éditer `/resources/css/app.css` :

```css
@theme {
    --color-sabou-clean: #2563eb;
    --color-sabou-event: #9333ea;
    /* ... */
}
```

### Ajouter du contenu

Les pages utilisent Blade. Modifier les fichiers `.blade.php` dans `/resources/views/`

### Ajouter une page

1. Créer la vue dans `resources/views/`
2. Ajouter la route dans `routes/web.php`
3. Ajouter la méthode dans `app/Http/Controllers/PageController.php`

## 📝 Notes Importantes

- Les logos des partenaires sont actuellement des placeholders (texte)
- Les images des services sont des dégradés de couleur (à remplacer par photos professionnelles)
- Le formulaire de contact nécessite une configuration backend pour l'envoi d'emails
- La carte Google Maps est un placeholder (intégrer l'API Google Maps)

## 🔄 Prochaines Étapes Suggérées

1. **Contenu**
   - Ajouter les vrais logos des partenaires
   - Photographier les équipes et réalisations
   - Rédiger les articles d'actualité complets

2. **Fonctionnalités**
   - Configurer l'envoi d'emails pour le formulaire de contact
   - Intégrer Google Maps API
   - Ajouter un système de gestion de contenu (CMS) pour les actualités

3. **SEO & Performance**
   - Optimiser les images
   - Ajouter les meta descriptions
   - Configurer le sitemap.xml
   - Optimiser pour les moteurs de recherche

4. **Accessibilité**
   - Tester avec un lecteur d'écran
   - Vérifier les contrastes de couleurs
   - Ajouter les attributs ARIA appropriés

## 📞 Support

Pour toute question concernant le site, contactez l'équipe de développement.

---

**Sabou-Gnouma SARL** - Excellence Multiservices en Afrique
