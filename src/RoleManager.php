<?php

declare(strict_types=1);

namespace Tavaan\Engine\Rbac;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * RoleManager — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\Rbac\Contracts\RoleManagerInterface
 */
final class RoleManager implements Contracts\RoleManagerInterface
{
    /**
     * @param Config $config پیکربندی موتور
     */
    public function __construct(
        private readonly Config $config,
    ) {
    }

    /**
     * {@inheritdoc}
     */
    public function create(/* ... */): mixed
    {
        // TODO: پیاده‌سازی create مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function assign(/* ... */): mixed
    {
        // TODO: پیاده‌سازی assign مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function remove(/* ... */): mixed
    {
        // TODO: پیاده‌سازی remove مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function hierarchy(/* ... */): mixed
    {
        // TODO: پیاده‌سازی hierarchy مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function syncFromModules(/* ... */): mixed
    {
        // TODO: پیاده‌سازی syncFromModules مطابق مستندات (سند §3 API).
        return null;
    }
}