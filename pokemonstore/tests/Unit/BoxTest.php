<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Box;

class BoxTest extends TestCase
{
    public function test_box_model_exists() {
        $box = new Box();
        $this->assertTrue($box instanceof Box);
    }
}
