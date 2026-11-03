<?php

declare(strict_types=1);

namespace Tavaan\Engine\Rbac\Tests\Feature;

use PHPUnit\Framework\TestCase;
use Tavaan\Engine\Rbac\Gate;
use Tavaan\Engine\Rbac\GateServiceProvider;
use Tavaan\Core\Contracts\Config\RepositoryInterface;

/**
 * تست‌های Feature برای موتور Gate.
 *
 * هر سناریوی T-NN از مستندات باید به یک متد testTNN_* تبدیل شود.
 */
final class GateTest extends TestCase
{
    private Gate $engine;

    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->createMock(RepositoryInterface::class);
        $config->method('get')->willReturn(null);
        $this->engine = new Gate($config);
    }

    /**
     * T-01: assignRole + hasRole
     */
    public function test_t01_assign_role__has_role(): void
    {
        // TODO: پیاده‌سازی سناریوی T-01 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-01 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-02: hasPermission از نقش
     */
    public function test_t02_has_permission__(): void
    {
        // TODO: پیاده‌سازی سناریوی T-02 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-02 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-03: سلسله‌مراتب: نقش والد → فرزند ارث می‌برد
     */
    public function test_t03______(): void
    {
        // TODO: پیاده‌سازی سناریوی T-03 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-03 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-04: Policy برای مدل
     */
    public function test_t04_policy__(): void
    {
        // TODO: پیاده‌سازی سناریوی T-04 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-04 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-05: `before` برای super-admin
     */
    public function test_t05_before__superadmin(): void
    {
        // TODO: پیاده‌سازی سناریوی T-05 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-05 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-06: Ownership Scope: کاربر A رکورد B را نمی‌بیند
     */
    public function test_t06_ownership_scope__a_(): void
    {
        // TODO: پیاده‌سازی سناریوی T-06 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-06 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-07: Wildcard `shop.*`
     */
    public function test_t07_wildcard_shop(): void
    {
        // TODO: پیاده‌سازی سناریوی T-07 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-07 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-08: Delegation موقت با انقضا
     */
    public function test_t08_delegation___(): void
    {
        // TODO: پیاده‌سازی سناریوی T-08 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-08 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-09: Sync از manifest
     */
    public function test_t09_sync__manifest(): void
    {
        // TODO: پیاده‌سازی سناریوی T-09 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-09 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-10: Cache invalidate در تغییر نقش
     */
    public function test_t10_cache_invalidate___(): void
    {
        // TODO: پیاده‌سازی سناریوی T-10 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-10 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-11: `authorize` → 403
     */
    public function test_t11_authorize__403(): void
    {
        // TODO: پیاده‌سازی سناریوی T-11 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-11 هنوز پیاده‌سازی نشده است.');
    }

}