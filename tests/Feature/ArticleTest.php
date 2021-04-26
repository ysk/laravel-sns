<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Article;

class ArticleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    use RefreshDatabase;

    public function testIsLikedByNull()
    {
        $article = factory(Article::class)->create();
        $result = $article->isLikedBy(null);
        $this->assertFalse($result);
    }
}
