<?php

declare(strict_types=1);

namespace Tavaan\Engine\Rbac\Tests\Feature;

use Tavaan\Testing\TestCase;
use Tavaan\Engine\Rbac\RbacManager;

/**
 * Feature tests for the rbac engine.
 */
final class RbacFeatureTest extends TestCase
{
    public function test_assign_role_to_user(): void
    {
$mgr = new RbacManager();
        $mgr->assignRole(1, "admin");
        $this->assertTrue($mgr->hasRole(1, "admin"));
    }

    public function test_user_without_role_returns_false(): void
    {
$mgr = new RbacManager();
        $this->assertFalse($mgr->hasRole(99, "admin"));
    }

    public function test_check_permission_via_role(): void
    {
$mgr = new RbacManager();
        $mgr->addPermissionToRole("admin", "delete");
        $mgr->assignRole(1, "admin");
        $this->assertTrue($mgr->hasPermission(1, "delete"));
    }

    public function test_check_permission_without_role_returns_false(): void
    {
$mgr = new RbacManager();
        $mgr->addPermissionToRole("admin", "delete");
        $this->assertFalse($mgr->hasPermission(5, "delete"));
    }

    public function test_remove_role_from_user(): void
    {
$mgr = new RbacManager();
        $mgr->assignRole(1, "admin");
        $mgr->removeRole(1, "admin");
        $this->assertFalse($mgr->hasRole(1, "admin"));
    }

    public function test_get_user_roles_returns_list(): void
    {
$mgr = new RbacManager();
        $mgr->assignRole(1, "admin");
        $mgr->assignRole(1, "editor");
        $roles = $mgr->getRoles(1);
        $this->assertContains("admin", $roles);
        $this->assertContains("editor", $roles);
    }
}
