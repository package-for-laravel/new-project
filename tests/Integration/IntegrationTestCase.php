<?php
/**
 * Integration test utilities
 */
declare(strict_types=1);

namespace Tests\Integration;

use AaronSaray\LaravelTestHelpers\SeedAfterRefresh;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Class IntegrationTestCase
 * @package Tests\Integration
 */
abstract class IntegrationTestCase extends TestCase
{
    use RefreshDatabase, SeedAfterRefresh;
}
