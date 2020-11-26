<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ViewQuestionTest extends TestCase
{
    /** @test */
    public function user_can_view_questions()
    {
        $this->withoutExceptionHandling();
        
        $test = $this->get('/questions');

        $test->assertStatus(200);
    }
}
