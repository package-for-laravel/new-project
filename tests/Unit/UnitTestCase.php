<?php
declare(strict_types=1);

namespace Tests\Unit;

use AaronSaray\LaravelTestHelpers\StopDBAccess;
use Tests\TestCase;

/**
 * Class UnitTestCase
 * @package Tests\Unit
 */
abstract class UnitTestCase extends TestCase
{
    use StopDBAccess;

    public function setUp(): void
    {
        parent::setUp();
        $this->stopDBAccess();
    }
}
