<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ThreadsTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic test example.
     *@test
     * @return void
     */
    public function test_a_user_can_view_all_threads()
    {
        $thread = factory('App\Threads')->create();
        $response = $this->get('/threads');

       // $response->assertStatus(200);
        $response->assertSee($thread->title);

    }
    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function test_a_user_can_read_a_single_thread()
    {
        $thread = factory('App\Threads')->create();

        $response = $this->get('/threads/' . $thread->id);
        $response->assertSee($thread->title);
    }
}
