<?php

declare(strict_types=1);

namespace Tipoff\GoogleApi\Tests\Unit\Policies;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tipoff\GoogleApi\Models\Key;
use Tipoff\GoogleApi\Tests\TestCase;
use Tipoff\Support\Contracts\Models\UserInterface;

class KeyPolicyTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function view_any()
    {
        $user = self::createPermissionedUser('view keys', true);
        $this->assertTrue($user->can('viewAny', Key::class));

        $user = self::createPermissionedUser('view keys', false);
        $this->assertFalse($user->can('viewAny', Key::class));
    }

    /**
     * @test
     * @dataProvider data_provider_for_all_permissions_as_creator
     */
    public function all_permissions_as_creator(string $permission, UserInterface $user, bool $expected)
    {
        $rate = Key::factory()->make([
            'creator_id' => $user,
        ]);

        $this->assertEquals($expected, $user->can($permission, $rate));
    }

    public function data_provider_for_all_permissions_as_creator()
    {
        return [
            'view-true' => [ 'view', self::createPermissionedUser('view keys', true), true ],
            'view-false' => [ 'view', self::createPermissionedUser('view keys', false), false ],
            'create-true' => [ 'create', self::createPermissionedUser('create keys', true), false ],
            'create-false' => [ 'create', self::createPermissionedUser('create keys', false), false ],
            'update-true' => [ 'update', self::createPermissionedUser('update keys', true), false ],
            'update-false' => [ 'update', self::createPermissionedUser('update keys', false), false ],
            'delete-true' => [ 'delete', self::createPermissionedUser('delete keys', true), false ],
            'delete-false' => [ 'delete', self::createPermissionedUser('delete keys', false), false ],
        ];
    }

    /**
     * @test
     * @dataProvider data_provider_for_all_permissions_not_creator
     */
    public function all_permissions_not_creator(string $permission, UserInterface $user, bool $expected)
    {
        $rate = Key::factory()->make();

        $this->assertEquals($expected, $user->can($permission, $rate));
    }

    public function data_provider_for_all_permissions_not_creator()
    {
        // Permissions are identical for creator or others
        return $this->data_provider_for_all_permissions_as_creator();
    }
}
