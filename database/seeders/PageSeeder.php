<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    public function run(): void
    {
        Page::create([
            'title' => 'Satori',
            'slug' => 'satori',
            'content' => 'Opis projektu Satori...',
            'meta_title' => 'Satori – Neurodiversity App',
            'meta_description' => 'Aplikacja dla osób neuroatypowych',
        ]);
    }
}
