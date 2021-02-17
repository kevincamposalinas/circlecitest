<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class InfoTest extends TestCase
{
    public function testAlwaysTrue(): void
    {
        $this->assertEquals(
            true,
            1==1,
        );
    }
}
