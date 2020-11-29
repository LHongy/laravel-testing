<?php

namespace Tests\Feature;

use App\Question;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ViewQuestionTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_can_view_questions()
    {
        $test = $this->get('/questions');

        $test->assertStatus(200);
    }
    
    /** @test */
    public function user_can_view_a_single_question()
    {
        // create a question
        $question = factory(Question::class)->create();

        // show the question
        $test = $this->get('/questions/' . $question->id);
        // see the content of the question

        $test->assertStatus(200)
            ->assertSee($question->title)
            ->assertSee($question->content);
    }
}
