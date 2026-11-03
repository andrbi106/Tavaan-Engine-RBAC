<?php

declare(strict_types=1);

namespace Tavaan\Engine\Rbac;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * Gate — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\Rbac\Contracts\GateInterface
 */
final class Gate implements Contracts\GateInterface
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
    public function define(/* ... */): mixed
    {
        // TODO: پیاده‌سازی define مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function policy(/* ... */): mixed
    {
        // TODO: پیاده‌سازی policy مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function before(/* ... */): mixed
    {
        // TODO: پیاده‌سازی before مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function after(/* ... */): mixed
    {
        // TODO: پیاده‌سازی after مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function allows(/* ... */): mixed
    {
        // TODO: پیاده‌سازی allows مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function denies(/* ... */): mixed
    {
        // TODO: پیاده‌سازی denies مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function check(/* ... */): mixed
    {
        // TODO: پیاده‌سازی check مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function any(/* ... */): mixed
    {
        // TODO: پیاده‌سازی any مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function authorize(/* ... */): mixed
    {
        // TODO: پیاده‌سازی authorize مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function forUser(/* ... */): mixed
    {
        // TODO: پیاده‌سازی forUser مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function abilities(/* ... */): mixed
    {
        // TODO: پیاده‌سازی abilities مطابق مستندات (سند §3 API).
        return null;
    }
}