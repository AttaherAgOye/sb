<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Créer le compte administrateur par défaut.
     */
    public function run(): void
    {
        // Vérifier si l'admin existe déjà
        $admin = User::where('email', 'admin@sabougnouma.com')->first();

        if ($admin) {
            // Mettre à jour si existe
            $admin->update([
                'name' => 'Administrateur',
                'is_admin' => true,
            ]);
            $this->command->info('Administrateur existant mis à jour.');
        } else {
            // Créer le nouvel admin
            User::create([
                'name' => 'Administrateur',
                'email' => 'admin@sabougnouma.com',
                'password' => Hash::make('SabouAdmin2026!'),
                'is_admin' => true,
            ]);
            $this->command->info('Administrateur créé avec succès.');
        }

        $this->command->info('');
        $this->command->info('╔══════════════════════════════════════════════════╗');
        $this->command->info('║     IDENTIFIANTS DE CONNEXION ADMIN              ║');
        $this->command->info('╠══════════════════════════════════════════════════╣');
        $this->command->info('║  Email:    admin@sabougnouma.com                 ║');
        $this->command->info('║  Mot de passe: SabouAdmin2024!                   ║');
        $this->command->info('╠══════════════════════════════════════════════════╣');
        $this->command->info('║  ⚠️  Changez ce mot de passe après connexion!    ║');
        $this->command->info('╚══════════════════════════════════════════════════╝');
    }
}
