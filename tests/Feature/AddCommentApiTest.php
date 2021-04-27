<?php

namespace Tests\Feature;

use App\Photo;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AddCommentApiTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void{
        parent::setUp();

        $this->user = factory(User::class)->create();
    }

    /**
     * @test
     */

     public function should_コメントを追加できる(){
         
}
