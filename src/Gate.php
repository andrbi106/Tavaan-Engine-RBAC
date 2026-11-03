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
    public function define()
    {
        return null;
    }
    /**
     * policy
     */
    public function policy()
    {
        return null;
    }
    /**
     * before
     */
    public function before()
    {
        return null;
    }
    /**
     * after
     */
    public function after()
    {
        return null;
    }
    /**
     * allows
     */
    public function allows()
    {
        return null;
    }
    /**
     * denies
     */
    public function denies()
    {
        return null;
    }
    /**
     * check
     */
    public function check(): bool
    {
        return $this->user !== null;
    }
    /**
     * any
     */
    public function any()
    {
        return null;
    }
    /**
     * authorize
     */
    public function authorize()
    {
        return null;
    }
    /**
     * forUser
     */
    public function forUser()
    {
        return null;
    }
    /**
     * abilities
     */
    public function abilities()
    {
        return null;
    }
}
