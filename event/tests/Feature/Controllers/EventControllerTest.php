<?php

namespace Tests\Http\Controllers;

use App\Http\Controllers\EventController;
use PHPUnit\Framework\TestCase;

class EventControllerTest extends TestCase
{

    public function test_a_welcome_view_can_be_rendered(): void
    {
        $view = $this->view('welcome', ['name' => 'Taylor']);

        $view->assertSee('Taylor');
    }
}
