<?php
/**
 * Tests for FluHivemindForgeVault
 */

use PHPUnit\Framework\TestCase;
use Fluhivemindforgevault\Fluhivemindforgevault;

class FluhivemindforgevaultTest extends TestCase {
    private Fluhivemindforgevault $instance;

    protected function setUp(): void {
        $this->instance = new Fluhivemindforgevault(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Fluhivemindforgevault::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
