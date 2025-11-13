<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function identity()
    {
        return view('identity');
    }

    public function sabouClean()
    {
        $service = [
            'name' => 'SABOU-CLEAN',
            'color' => 'blue',
            'tagline' => 'Aucun espace n\'est trop grand à entretenir.',
            'description' => 'Excellence en propreté et entretien professionnel',
        ];
        return view('services.clean', compact('service'));
    }

    public function sabouEvent()
    {
        $service = [
            'name' => 'SABOU-EVENT',
            'color' => 'purple',
            'tagline' => 'Un lieu vide est une scène en attente de magie.',
            'description' => 'Décoration et ingénierie événementielle de prestige',
        ];
        return view('services.event', compact('service'));
    }

    public function sabouFood()
    {
        $service = [
            'name' => 'SABOU-FOOD',
            'color' => 'orange',
            'tagline' => 'La qualité ne se négocie pas : elle se savoure.',
            'description' => 'Restauration et traiteur professionnel haut de gamme',
        ];
        return view('services.food', compact('service'));
    }

    public function sabouAgro()
    {
        $service = [
            'name' => 'SABOU-AGRO',
            'color' => 'green',
            'tagline' => 'Nourrir, c\'est aussi préserver l\'avenir.',
            'description' => 'Agrobusiness et projets agroalimentaires intégrés',
        ];
        return view('services.agro', compact('service'));
    }

    public function sabouAcademy()
    {
        $service = [
            'name' => 'SABOU-ACADEMY',
            'color' => 'yellow',
            'tagline' => 'Chaque talent mérite d\'être révélé.',
            'description' => 'Formation et développement des compétences',
        ];
        return view('services.academy', compact('service'));
    }

    public function partners()
    {
        return view('partners');
    }

    public function contact()
    {
        return view('contact');
    }

    public function news()
    {
        return view('news');
    }
}
