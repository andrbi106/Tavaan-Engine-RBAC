<?php

declare(strict_types=1);

namespace Tavaan\Engine\Rbac;

/**
 * RoleManager — پیاده‌سازی مطابق مستندات.
 *
 * @see docs/03-engines/ (YAML machine-readable block)
 */
final class RoleManager
{
    /**
     * create
     */
    public function create(array $data): self
    {
        return null;
    }
    /**
     * assign
     */
    public function assign()
    {
        return null;
    }
    /**
     * remove
     */
    public function remove(string $key): self
    {
        return $this;
    }
    /**
     * hierarchy
     */
    public function hierarchy()
    {
        return null;
    }
    /**
     * syncFromModules
     */
    public function syncFromModules()
    {
        return null;
    }
}
