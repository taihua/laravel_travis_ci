<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Http\Controllers\PostController;
use App\Post;

class PostTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function test_post_index()
    {
        $this->visit('/post')
             ->see('留言板');
    }

    public function test_post_index_on_one_row()
    {
        $post = new post();
        $post->title = 'title_1';
        $post->content = 'content_test';
        $post->save();
        $this->visit('/post')
             ->see('title_1');
    }


    /*
    public function test_new_postcontroller()
    {
        $post = New PostController($post);
    }
    */

}
