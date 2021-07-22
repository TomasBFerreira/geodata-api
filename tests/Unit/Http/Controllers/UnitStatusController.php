<?php

namespace Tests\Unit\Http\Controllers;

use TestCase;

class UnitStatusController extends TestCase
{

    public function testAssertStatus()
    {
        $this->json('GET', '/status')
                ->seeJson(['success' => true])
                ->seeStatusCode(200);
    }

    public function testHomepageNotFound()
    {
        $this->get('/')
                ->seeStatusCode(404);
    }

}
