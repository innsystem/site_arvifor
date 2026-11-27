<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertOk();
        $response->assertSee('Site em Construção', false);
        $response->assertSee('contato@arvifor.com.br', false);
        $response->assertSee('(11) 91047-3456', false);
        $response->assertSee('wa.me/5511910473456', false);
    }
}
