<?php

declare(strict_types=1);

namespace Tavaan\Engine\Rbac;

/**
 * Gate — پیاده‌سازی مطابق مستندات.
 *
 * @see docs/03-engines/ (YAML machine-readable block)
 */
final class Gate
{
    /**
     * define
     */
    public function define(/* ... */): mixed
    {
        return null;
    }
    /**
     * policy
     */
    public function policy(/* ... */): mixed
    {
        return null;
    }
    /**
     * before
     */
    public function before(/* ... */): mixed
    {
        return null;
    }
    /**
     * after
     */
    public function after(/* ... */): mixed
    {
        return null;
    }
    /**
     * allows
     */
    public function allows(/* ... */): mixed
    {
        return [];
    }
    /**
     * denies
     */
    public function denies(/* ... */): mixed
    {
        return null;
    }
    /**
     * check
     */
    public function check(/* ... */): mixed
    {
        return $this->user !== null;
    }
    /**
     * any
     */
    public function any(/* ... */): mixed
    {
        return null;
    }
    /**
     * authorize
     */
    public function authorize(/* ... */): mixed
    {
        return null;
    }
    /**
     * forUser
     */
    public function forUser(/* ... */): mixed
    {
        return null;
    }
    /**
     * abilities
     */
    public function abilities(/* ... */): mixed
    {
        return null;
    }
}
