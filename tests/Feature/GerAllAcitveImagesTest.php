<?php

namespace Tests\Feature;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class GerAllAcitveImagesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
//        $this->cle
        $response = $this->get('/images');
        $content = $response->getContent();
        $status = $response->status();

        $response->assertStatus(200);
    }
}
