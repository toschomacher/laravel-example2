<?php

namespace Database\Seeders;

use App\Models\JobListing;
use Illuminate\Database\Seeder;

class JobListingSeeder extends Seeder
{
    public function run(): void
    {
        JobListing::create([
            'title' => 'Junior PHP Developer',
            'salary' => '€45,000',
        ]);

        JobListing::create([
            'title' => 'Senior Laravel Developer',
            'salary' => '€75,000',
        ]);

        JobListing::create([
            'title' => 'DevOps Engineer',
            'salary' => '€85,000',
        ]);
    }
}
