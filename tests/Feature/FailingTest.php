<?php

namespace Tests\Feature;

use Tests\TestCase;

class FailingTest extends TestCase
{
    public function test_the_livewire_component_works()
    {
        $response = $this->get('/livewire-test');
        $response->assertSee('Hello World');
    }

    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');
        $response->assertViewHas('a-property');
    }
}
