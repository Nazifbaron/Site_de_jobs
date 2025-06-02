<?php

namespace Tests\Feature;

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class JobTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;

    public function test_example(): void
    {
        $employeur = Employer::factory()->create();
        $job = Job::factory()->create([
            'employer_id' => $employeur->id,
        ]);
        
        $this->assertInstanceOf(Employer::class, $job->employer);
        $this->assertEquals($employeur->id, $job->employer->id);
    }

    public function test_job_tag(): void
    {
        $employer = Employer::factory()->create();

        $job = Job::factory()->create([
        'employer_id' => $employer->id, 
        ]);

        $job->tag('frontend');

        $this->assertTrue($job->tags->contains('name', 'frontend'));

    }
}
