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
        // TODO: Implement per docs §3 API.
        return null;
    }
    /**
     * policy
     */
    public function policy(/* ... */): mixed
    {
        // TODO: Implement per docs §3 API.
        return null;
    }
    /**
     * before
     */
    public function before(/* ... */): mixed
    {
        // TODO: Implement per docs §3 API.
        return null;
    }
    /**
     * after
     */
    public function after(/* ... */): mixed
    {
        // TODO: Implement per docs §3 API.
        return null;
    }
    /**
     * allows
     */
    public function allows(/* ... */): mixed
    {
        // TODO: Implement per docs §3 API.
        return null;
    }
    /**
     * denies
     */
    public function denies(/* ... */): mixed
    {
        // TODO: Implement per docs §3 API.
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
        // TODO: Implement per docs §3 API.
        return null;
    }
    /**
     * authorize
     */
    public function authorize(/* ... */): mixed
    {
        // TODO: Implement per docs §3 API.
        return null;
    }
    /**
     * forUser
     */
    public function forUser(/* ... */): mixed
    {
        // TODO: Implement per docs §3 API.
        return null;
    }
    /**
     * abilities
     */
    public function abilities(/* ... */): mixed
    {
        // TODO: Implement per docs §3 API.
        return null;
    }
}
