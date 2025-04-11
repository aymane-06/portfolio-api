<?php

namespace Database\Seeders;

use App\Models\Projects;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Projects::create([
            'title' => "portfolio-api",
            'description' => "API backend for managing portfolio data such as projects and contact forms.",
            'image' => "https://raw.githubusercontent.com/github/explore/7456fdff59816d37ef383a6c8f32a26ff7332db2/topics/laravel/laravel.png",
            'category' => "Web Development",
            'technologies' => json_encode(["Laravel", "PHP"]),
            'demo_link' => "#",
            'github_link' => "https://github.com/aymane-06/portfolio-api"
        ]);

        Projects::create([
            'title' => "Aymane-06",
            'description' => "Personal GitHub profile readme showcasing developer journey and skills.",
            'image' => "https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png",
            'category' => "Web Development",
            'technologies' => json_encode(["Markdown"]),
            'demo_link' => "#",
            'github_link' => "https://github.com/aymane-06/Aymane-06"
        ]);

        Projects::create([
            'title' => "React_Protfolio",
            'description' => "A modern and animated portfolio built with React and TailwindCSS.",
            'image' => "https://raw.githubusercontent.com/github/explore/80688e429a7d4ef2fca1e82350fe8e3517d3494d/topics/react/react.png",
            'category' => "Web Development",
            'technologies' => json_encode(["React", "Tailwind CSS", "Framer Motion"]),
            'demo_link' => "#",
            'github_link' => "https://github.com/aymane-06/React_Protfolio"
        ]);

        Projects::create([
            'title' => "BarberShop",
            'description' => "A full-stack barbershop reservation platform with admin and barber features.",
            'image' => "https://img.freepik.com/free-vector/barber-shop-pole-realistic-isolated_1284-11873.jpg",
            'category' => "Web Development",
            'technologies' => json_encode(["Laravel", "PHP", "Blade"]),
            'demo_link' => "#",
            'github_link' => "https://github.com/aymane-06/BarberShop"
        ]);

        Projects::create([
            'title' => "API-REST-Laravel",
            'description' => "RESTful API using Laravel showcasing routes, controllers, and model structure.",
            'image' => "https://kinsta.com/wp-content/uploads/2020/08/rest-api.png",
            'category' => "Web Development",
            'technologies' => json_encode(["Laravel", "PHP", "MySQL"]),
            'demo_link' => "#",
            'github_link' => "https://github.com/aymane-06/API-REST-Laravel"
        ]);

        

        

        Projects::create([
            'title' => "Navet-des-auto",
            'description' => "Laravel project probably related to vehicle management or transportation.",
            'image' => "https://img.freepik.com/free-vector/city-driver-concept-illustration_114360-1209.jpg",
            'category' => "Web Development",
            'technologies' => json_encode(["Laravel", "PHP"]),
            'demo_link' => "#",
            'github_link' => "https://github.com/aymane-06/Navet-des-auto"
        ]);

        

        Projects::create([
            'title' => "Navet_Des_AutoCar",
            'description' => "AutoCar transportation project simulation built with Laravel.",
            'image' => "https://img.freepik.com/free-vector/bus-concept-illustration_114360-3395.jpg",
            'category' => "Web Development",
            'technologies' => json_encode(["Laravel", "PHP"]),
            'demo_link' => "#",
            'github_link' => "https://github.com/aymane-06/Navet_Des_AutoCar"
        ]);

        Projects::create([
            'title' => "NeoBankOOP",
            'description' => "An object-oriented programming project for simulating a banking system.",
            'image' => "https://img.freepik.com/free-vector/banking-concept-illustration_114360-9129.jpg",
            'category' => "Web Development",
            'technologies' => json_encode(["PHP", "Object-Oriented Programming"]),
            'demo_link' => "#",
            'github_link' => "https://github.com/aymane-06/NeoBankOOP"
        ]);

        Projects::create([
            'title' => "NeoBank",
            'description' => "A banking management system with a focus on object-oriented practices.",
            'image' => "https://img.freepik.com/free-vector/mobile-banking-concept-illustration_114360-1912.jpg",
            'category' => "Web Development",
            'technologies' => json_encode(["PHP", "OOP", "MySQL"]),
            'demo_link' => "#",
            'github_link' => "https://github.com/aymane-06/NeoBank"
        ]);

        Projects::create([
            'title' => "Flight-Reservation",
            'description' => "A flight reservation system to simulate booking and searching for flights.",
            'image' => "https://img.freepik.com/free-vector/airplane-sky_1308-31202.jpg",
            'category' => "Web Development",
            'technologies' => json_encode(["PHP", "Laravel", "MySQL"]),
            'demo_link' => "#",
            'github_link' => "https://github.com/aymane-06/Flight-Reservation"
        ]);

        Projects::create([
            'title' => "ecommerce-php",
            'description' => "An e-commerce system built using PHP, showcasing product management, client orders, and shopping cart functionality.",
            'image' => "https://img.freepik.com/free-vector/ecommerce-web-page-concept-illustration_114360-8204.jpg",
            'category' => "Web Development",
            'technologies' => json_encode(["PHP", "MySQL", "Bootstrap"]),
            'demo_link' => "#",
            'github_link' => "https://github.com/aymane-06/ecommerce-php"
        ]);

        Projects::create([
            'title' => "js-BookStore",
            'description' => "A JavaScript-based bookstore management system for handling product listings and customer orders.",
            'image' => "https://img.freepik.com/free-vector/hand-drawn-flat-design-bookstore-logo_23-2149350212.jpg",
            'category' => "Web Development",
            'technologies' => json_encode(["JavaScript", "HTML", "CSS"]),
            'demo_link' => "#",
            'github_link' => "https://github.com/aymane-06/js-BookStore"
        ]);

        Projects::create([
            'title' => "projects_manager",
            'description' => "A Laravel-based project management application, showcasing CRUD functionalities for managing projects.",
            'image' => "https://img.freepik.com/free-vector/project-management-concept-illustration_114360-667.jpg",
            'category' => "Web Development",
            'technologies' => json_encode(["Laravel", "PHP"]),
            'demo_link' => "#",
            'github_link' => "https://github.com/aymane-06/projects_manager"
        ]);

        Projects::create([
            'title' => "calculator_js",
            'description' => "A simple calculator built with vanilla JavaScript to practice DOM manipulation.",
            'image' => "https://img.freepik.com/free-vector/calculator-concept-illustration_114360-1180.jpg",
            'category' => "Web Development",
            'technologies' => json_encode(["JavaScript", "HTML", "CSS"]),
            'demo_link' => "#",
            'github_link' => "https://github.com/aymane-06/calculator_js"
        ]);

        Projects::create([
            'title' => "YouDemy",
            'description' => "A platform for online courses or training, built with Laravel and featuring course management.",
            'image' => "https://img.freepik.com/free-vector/online-tutorials-concept_23-2148688910.jpg",
            'category' => "Web Development",
            'technologies' => json_encode(["Laravel", "PHP"]),
            'demo_link' => "#",
            'github_link' => "https://github.com/aymane-06/YouDemy"
        ]);

        Projects::create([
            'title' => "fut-champBackend",
            'description' => "A backend system for a football championship management app, including player and team management.",
            'image' => "https://img.freepik.com/free-vector/soccer-football-tournament-background-with-ball_1017-24237.jpg",
            'category' => "Web Development",
            'technologies' => json_encode(["PHP", "Laravel", "MySQL"]),
            'demo_link' => "#",
            'github_link' => "https://github.com/aymane-06/fut-champBackend"
        ]);
        
    }
}
