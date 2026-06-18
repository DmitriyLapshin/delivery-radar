<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::create([
            'name' => 'CRM Modernization',
            'deadline' => '2026-09-01',
        ]);

        Project::create([
            'name' => 'Mobile App Revamp',
            'deadline' => '2026-10-15',
        ]);

        Project::create([
            'name' => 'Bank Integration',
            'deadline' => '2026-08-01',
        ]);
    }
}