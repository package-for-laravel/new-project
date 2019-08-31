<?php
declare(strict_types=1);

namespace Tests\Feature;

use PackageForLaravel\TestingFramework\TestCases\FeatureTestCase;

/**
 * Class ExampleTest
 * @package Tests\Feature
 */
class ExampleTest extends FeatureTestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
