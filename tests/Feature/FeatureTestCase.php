<?php
/**
 * Abstract feature test case items
 */
declare(strict_types=1);

namespace Tests\Feature;

use AaronSaray\LaravelTestHelpers\CreateActingAs;
use App\Models\Market;
use App\Models\Permission;
use App\Models\User\User;
use Tests\Integration\IntegrationTestCase;

/**
 * Class FeatureTestCase
 * @package Tests\Feature
 */
abstract class FeatureTestCase extends IntegrationTestCase
{
    use CreateActingAs;

    /**
     * @var Market the current context market
     */
    protected $currentMarket;

    /**
     * Create a user that has the simplest permission
     * Also assign the current market
     * @param array $properties
     * @param string $permission
     * @return User
     */
    protected function createActingAsWithPermission(string $permission, array $properties = []): User
    {
        /** @var User $user */
        $user = $this->createActingAsWithCurrentMarket($properties);
        $user->givePermissionTo($permission);

        return $user;
    }

    /**
     * Create a user with no roles/properties - but has current market
     *
     * @param array $properties
     * @return User
     */
    protected function createActingAsWithCurrentMarket(array $properties = []): User
    {
        $user = $this->createActingAs($properties);
        $this->createCurrentMarket();
        $user->markets()->sync($this->currentMarket->id);
        return $user;
    }

    /**
     * creates a current market then makes a url that matches our current context
     *
     * @param string $routeName
     * @param array $params
     * @return string
     */
    protected function currentMarketRoute(string $routeName, array $params = []): string
    {
        $this->createCurrentMarket();

        return route($routeName, array_merge([
            'currentMarket' => $this->currentMarket->slug
        ], $params));
    }

    /**
     * Create the current market and assign it
     * we need this sometimes for getting a market before we can generate a route
     * @param array|null $attributes
     * @return Market
     */
    protected function createCurrentMarket(array $attributes = []): Market
    {
        if ($this->currentMarket === null) {
            $this->currentMarket = factory(Market::class)->create($attributes);
        }

        return $this->currentMarket;
    }

    /**
     * Verify this url requires a login redirect if non auth
     * @param string $url
     * @param string $method
     */
    protected function noAuthRedirectTest(string $url, $method = 'get'): void
    {
        $this->call($method, $url)->assertStatus(302)->assertRedirect(route('login'));
    }

    /**
     * Give a wrong permission and verify we get a 403
     * @param string $url
     * @param string $method
     */
    protected function wrongPermission403Test(string $url, $method = 'get'): void
    {
        $this->createActingAs()->givePermissionTo(Permission::NO_OP);
        $this->call($method, $url)->assertStatus(403);
    }

    /**
     * @param $structure
     * you have to do this because the json methods don't test order properly (seems like they should when using 'exact')
     * @param $response
     */
    protected function assertSameJson($structure, $response): void
    {
        $this->assertSame(json_encode($structure), $response->getContent());
    }
}
