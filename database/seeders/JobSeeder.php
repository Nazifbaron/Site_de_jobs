<?php

namespace Database\Seeders;

use App\Models\Employer;
use App\Models\Job;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = Tag::factory(3)->create();

        $employer = Employer::factory()->create();
        Job::factory()
            ->count(25)
            ->state(new Sequence(
                ['feactured' => false, 'contrat' => 'Full Time'],
                ['feactured' => true,  'contrat' => 'Part Time']
            ))
            ->create(['employer_id' => $employer->id])
            ->each(function ($job) use ($tags) {
                // Attache aléatoirement 1 à 3 tags à chaque job
                $job->tags()->attach(
                    $tags->random(rand(1, 3))->pluck('id')->toArray()
                );
            });
           /* Job::factory(25)->hasAttached($tags)->create([
                'employer_id' => $employer->id
            ]);*/

    }
}
