<?php

declare(strict_types=1);

namespace Tavaan\Engine\Rbac\Contracts;

/**
 * قرارداد RoleManager.
 *
 * @see \Tavaan\Engine\Rbac\RoleManager
 * @api 1.0
 */
interface RoleManagerInterface
{
    /**
     * متد create.
     *
     * @return mixed
     */
    public function create(/* ... */): mixed;

    /**
     * متد assign.
     *
     * @return mixed
     */
    public function assign(/* ... */): mixed;

    /**
     * متد remove.
     *
     * @return mixed
     */
    public function remove(/* ... */): mixed;

    /**
     * متد hierarchy.
     *
     * @return mixed
     */
    public function hierarchy(/* ... */): mixed;

    /**
     * متد syncFromModules.
     *
     * @return mixed
     */
    public function syncFromModules(/* ... */): mixed;
}