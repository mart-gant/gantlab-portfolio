<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::create([
            'title' => 'Satori — Backend System',
            'slug' => 'satori',
            'description' => 'Backend system built with PHP (Laravel) and MySQL. Designed database schema and REST API for user management and profiles. Implemented authentication, validation logic and API endpoints.',
            'type' => 'backend / api',
            'url' => 'https://satori-two.vercel.app',
        ]);

        Project::create([
            'title' => 'Web Platform Backend',
            'slug' => 'oaza-dla-autyzmu',
            'description' => 'Web platform backend developed in Laravel with MySQL. Implemented authentication, search functionality and data validation. Responsible for system maintenance and bug fixing after deployment.',
            'type' => 'backend / maintenance',
        ]);
    }
}
