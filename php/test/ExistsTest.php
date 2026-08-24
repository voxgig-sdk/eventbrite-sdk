<?php
declare(strict_types=1);

// Eventbrite SDK exists test

require_once __DIR__ . '/../eventbrite_sdk.php';

use PHPUnit\Framework\TestCase;

class ExistsTest extends TestCase
{
    public function test_create_test_sdk(): void
    {
        $testsdk = EventbriteSDK::test(null, null);
        $this->assertNotNull($testsdk);
    }
}
