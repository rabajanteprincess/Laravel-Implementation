<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Objective;
use App\Models\Education;
use App\Models\Skill;
use App\Models\PersonalInfo;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Objective::create([
            'obj' => 'Passionate about thorough research focused on finding insights for project success. Committed to leading the team with care, ensuring every step aligns with the projects goals.',
        ]);
        Skill::create([
            'skill' => 'Good at Time Management',
        ]);
        Skill::create([
            'skill' => 'Ability to Work Under Pressure',
        ]);
        Education::create([
            'school' => 'Baliwag Polytechnic College',
            'course' => 'Bachelor of Science in Information Technology',
            'address' => 'Brgy. Poblacion Baliuag, Bulacan',
            'year' => '2021- Present',
        ]);
        Education::create([
            'school' => 'Jose Panganiban  National High School',
            'course' => '',
            'address' => 'Brgy. Parang Jose Panganiban Camarines Norte',
            'year' => '2019-2021',
        ]);
        Education::create([
            'school' => 'Baliwag Polytechnic College',
            'course' => '',
            'address' => 'Brgy. Calero Jose Panganiban Camarines Norte',
            'year' => '2010-2015',
        ]);
        PersonalInfo::create([
            'name' => 'Princess A. Rabajanter',
            'address' => 'Makinabang, Baliuag Bulacan',
            'phone' => '09503573147',
            'email' => 'rabajanteprincess@gmail.com',
            'birthday' => 'April 11, 2003',
            'age' => '21',
            'placeOfBirth' => 'Calero, Jose Panganiban CM',
            'gender' => 'Female',
            'civil' => 'Single',
            'religion' => 'Christian',
            'height' => '160 cm',
            'weight' => '41 kg',
        ]);
    }
}