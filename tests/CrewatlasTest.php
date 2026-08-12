<?php
/**
 * Tests for CrewAtlas
 */

use PHPUnit\Framework\TestCase;
use Crewatlas\Crewatlas;

class CrewatlasTest extends TestCase {
    private Crewatlas $instance;

    protected function setUp(): void {
        $this->instance = new Crewatlas(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Crewatlas::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
