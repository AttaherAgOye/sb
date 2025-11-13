<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\News;
use Carbon\Carbon;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeder.
     */
    public function run(): void
    {
        $newsData = [
            [
                'title' => 'SABOUGNOUMA lance ses nouveaux services de nettoyage écologique',
                'excerpt' => 'Découvrez notre nouvelle gamme de services SABOU-CLEAN respectueux de l\'environnement, utilisant des produits 100% biodégradables pour un nettoyage efficace et durable.',
                'content' => "SABOUGNOUMA est fière d'annoncer le lancement de sa nouvelle gamme de services de nettoyage écologique dans le cadre de SABOU-CLEAN. Cette initiative s'inscrit dans notre engagement constant pour la protection de l'environnement et la santé de nos clients.\n\nNos nouveaux services incluent :\n\n• Nettoyage de bureaux avec des produits certifiés bio\n• Entretien de locaux commerciaux sans produits chimiques nocifs\n• Services de désinfection naturelle\n• Formation du personnel aux techniques de nettoyage écologique\n\nNous utilisons désormais exclusivement des produits 100% biodégradables, sans phosphates ni substances toxiques. Cette approche garantit un environnement de travail plus sain pour vos employés tout en préservant notre écosystème.\n\nNos équipes ont été spécialement formées aux nouvelles techniques de nettoyage écologique, alliant efficacité et respect de l'environnement. Nous proposons également des audits environnementaux pour optimiser vos pratiques de nettoyage.\n\nContactez-nous dès aujourd'hui pour découvrir comment SABOU-CLEAN peut transformer votre approche du nettoyage professionnel.",
                'category' => 'services',
                'is_featured' => true,
                'is_published' => true,
                'published_at' => Carbon::now()->subDays(2),
                'author' => 'Équipe SABOUGNOUMA',
                'tags' => ['écologie', 'nettoyage', 'innovation', 'environnement'],
                'views_count' => 245
            ],
            [
                'title' => 'Partenariat stratégique avec les entreprises locales du Mali',
                'excerpt' => 'SABOUGNOUMA renforce ses liens avec l\'écosystème entrepreneurial malien en signant plusieurs accords de partenariat avec des entreprises locales innovantes.',
                'content' => "Dans le cadre de sa stratégie de développement local, SABOUGNOUMA a récemment signé plusieurs accords de partenariat avec des entreprises maliennes de premier plan.\n\nCes partenariats concernent plusieurs secteurs :\n\n• Agrobusiness : Collaboration avec des coopératives agricoles locales\n• Technologie : Intégration de solutions digitales développées au Mali\n• Formation : Programmes conjoints avec des centres de formation professionnelle\n• Événementiel : Alliances avec des organisateurs d'événements locaux\n\nCette démarche s'inscrit dans notre vision de contribuer au développement économique du Mali en privilégiant les synergies locales. Nous croyons fermement que la collaboration entre entreprises maliennes est un levier essentiel pour la croissance économique du pays.\n\nNos nouveaux partenaires apportent leur expertise locale et leur connaissance du marché, tandis que SABOUGNOUMA met à disposition son expérience en gestion de projets multisectoriels et ses ressources techniques.\n\nEnsemble, nous développons des solutions innovantes adaptées aux besoins spécifiques du marché malien, créant ainsi de la valeur ajoutée pour tous nos clients.",
                'category' => 'partenariats',
                'is_featured' => true,
                'is_published' => true,
                'published_at' => Carbon::now()->subDays(5),
                'author' => 'Direction Générale',
                'tags' => ['partenariat', 'mali', 'développement', 'local'],
                'views_count' => 189
            ],
            [
                'title' => 'SABOU-ACADEMY : Nouvelle formation en entrepreneuriat digital',
                'excerpt' => 'Lancez votre entreprise digitale avec notre nouveau programme de formation intensive. 12 semaines pour maîtriser tous les aspects de l\'entrepreneuriat numérique.',
                'content' => "SABOU-ACADEMY est ravie de présenter son nouveau programme de formation en entrepreneuriat digital, conçu pour accompagner la nouvelle génération d'entrepreneurs maliens.\n\nProgramme de 12 semaines comprenant :\n\n• Fondamentaux du business digital\n• Stratégies de marketing en ligne\n• Gestion financière et comptabilité numérique\n• Développement de produits digitaux\n• Techniques de vente en ligne\n• Gestion d'équipes à distance\n\nNotre approche pédagogique combine théorie et pratique, avec des études de cas réels et des projets concrets. Chaque participant développe son propre projet entrepreneurial tout au long de la formation.\n\nL'équipe pédagogique est composée d'entrepreneurs expérimentés, de consultants en stratégie digitale et d'experts en technologies. Nous proposons également un accompagnement post-formation de 6 mois pour assurer le succès de votre projet.\n\nLes inscriptions sont ouvertes pour la prochaine session qui débutera le mois prochain. Places limitées à 20 participants pour garantir un suivi personnalisé.\n\nRejoignez la révolution digitale malienne avec SABOU-ACADEMY !",
                'category' => 'evenements',
                'is_featured' => false,
                'is_published' => true,
                'published_at' => Carbon::now()->subDays(7),
                'author' => 'SABOU-ACADEMY',
                'tags' => ['formation', 'digital', 'entrepreneuriat', 'academy'],
                'views_count' => 156
            ],
            [
                'title' => 'Innovation dans l\'agrobusiness : SABOU-AGRO présente ses nouvelles solutions',
                'excerpt' => 'Découvrez comment SABOU-AGRO révolutionne l\'agriculture malienne avec des technologies innovantes et des pratiques durables pour améliorer les rendements.',
                'content' => "SABOU-AGRO continue d'innover pour moderniser l'agriculture malienne et améliorer les conditions de vie des producteurs locaux.\n\nNos dernières innovations incluent :\n\n• Système d'irrigation intelligent avec capteurs IoT\n• Application mobile pour le suivi des cultures\n• Programme de formation aux techniques agricoles modernes\n• Solutions de financement adaptées aux petits producteurs\n• Plateforme de mise en relation producteurs-acheteurs\n\nNotre système d'irrigation intelligent permet d'optimiser l'utilisation de l'eau en fonction des besoins réels des cultures. Les capteurs IoT mesurent l'humidité du sol, la température et d'autres paramètres essentiels pour déclencher l'irrigation au moment optimal.\n\nL'application mobile SABOU-AGRO permet aux agriculteurs de suivre leurs cultures, recevoir des conseils personnalisés et accéder aux prévisions météorologiques. Elle intègre également un module de gestion financière pour optimiser la rentabilité des exploitations.\n\nNos programmes de formation couvrent les techniques agricoles modernes, la gestion durable des ressources et l'utilisation des nouvelles technologies. Nous organisons régulièrement des sessions dans différentes régions du Mali.\n\nContactez SABOU-AGRO pour découvrir comment nos solutions peuvent transformer votre exploitation agricole.",
                'category' => 'innovations',
                'is_featured' => true,
                'is_published' => true,
                'published_at' => Carbon::now()->subDays(10),
                'author' => 'Équipe SABOU-AGRO',
                'tags' => ['agriculture', 'innovation', 'technologie', 'durabilité'],
                'views_count' => 298
            ],
            [
                'title' => 'SABOU-EVENT organise le plus grand salon de l\'innovation du Mali',
                'excerpt' => 'Rendez-vous les 15 et 16 décembre pour le Salon de l\'Innovation Malienne, organisé par SABOU-EVENT. Plus de 100 exposants et 5000 visiteurs attendus.',
                'content' => "SABOU-EVENT est fière d'organiser la première édition du Salon de l'Innovation Malienne, un événement majeur qui rassemblera l'écosystème entrepreneurial et technologique du pays.\n\nAu programme :\n\n• Plus de 100 exposants (startups, PME, grandes entreprises)\n• Conférences avec des experts internationaux\n• Ateliers pratiques sur l'innovation\n• Concours de pitch pour jeunes entrepreneurs\n• Espaces de networking et de partenariats\n• Démonstrations de technologies émergentes\n\nCet événement vise à promouvoir l'innovation malienne et à créer des synergies entre les différents acteurs de l'écosystème. Nous attendons plus de 5000 visiteurs sur les deux jours.\n\nLes thématiques principales incluent :\n• Fintech et services financiers digitaux\n• Agritech et innovations agricoles\n• Cleantech et énergies renouvelables\n• E-commerce et solutions digitales\n• Santech et innovations médicales\n\nDes investisseurs nationaux et internationaux seront présents pour découvrir les projets les plus prometteurs. Le concours de pitch offrira 50 millions de FCFA de prix aux meilleures innovations.\n\nInscriptions ouvertes sur notre site web. Tarif préférentiel pour les étudiants et jeunes entrepreneurs.",
                'category' => 'evenements',
                'is_featured' => false,
                'is_published' => true,
                'published_at' => Carbon::now()->subDays(12),
                'author' => 'SABOU-EVENT',
                'tags' => ['événement', 'innovation', 'salon', 'entrepreneuriat'],
                'views_count' => 412
            ],
            [
                'title' => 'SABOU-FOOD révolutionne la restauration collective au Mali',
                'excerpt' => 'Découvrez nos nouvelles solutions de restauration collective qui allient qualité nutritionnelle, respect des traditions culinaires maliennes et innovation logistique.',
                'content' => "SABOU-FOOD lance ses services de restauration collective nouvelle génération, spécialement conçus pour répondre aux besoins des entreprises, écoles et institutions maliennes.\n\nNos innovations :\n\n• Menus équilibrés respectant les traditions culinaires locales\n• Approvisionnement auprès de producteurs locaux\n• Système de traçabilité alimentaire complet\n• Solutions de livraison écologique\n• Application de commande et feedback en temps réel\n• Programmes nutritionnels personnalisés\n\nNous travaillons exclusivement avec des producteurs locaux pour garantir la fraîcheur des ingrédients tout en soutenant l'économie locale. Notre système de traçabilité permet de suivre chaque produit de la ferme à l'assiette.\n\nNos chefs cuisiniers, formés aux techniques modernes, revisitent les plats traditionnels maliens pour créer des menus savoureux et équilibrés. Nous proposons des options végétariennes, sans gluten et adaptées aux régimes spéciaux.\n\nNotre flotte de véhicules électriques assure des livraisons respectueuses de l'environnement. L'application SABOU-FOOD permet aux clients de passer commande, suivre la livraison et donner leur feedback.\n\nNous proposons également des programmes de sensibilisation à la nutrition et des ateliers culinaires pour promouvoir une alimentation saine.\n\nContactez-nous pour une démonstration gratuite de nos services.",
                'category' => 'services',
                'is_featured' => false,
                'is_published' => true,
                'published_at' => Carbon::now()->subDays(15),
                'author' => 'Équipe SABOU-FOOD',
                'tags' => ['restauration', 'nutrition', 'local', 'innovation'],
                'views_count' => 167
            ]
        ];

        foreach ($newsData as $data) {
            News::create($data);
        }
    }
}
