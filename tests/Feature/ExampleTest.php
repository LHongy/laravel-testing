<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ViewQuestionTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserCanViewQuestions()
    {
        $this->withoutExceptionHandling();
        
        $test = $this->get('/questions');

        $test->assertStatus(200);
    }
}
