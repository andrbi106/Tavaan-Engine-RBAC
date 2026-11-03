<?php

declare(strict_types=1);

namespace Tavaan\Engine\Rbac\Contracts;

/**
 * قرارداد Gate.
 *
 * @see \Tavaan\Engine\Rbac\Gate
 * @api 1.0
 */
interface GateInterface
{
    /**
     * متد define.
     *
     * @return mixed
     */
    public function define(/* ... */): mixed;

    /**
     * متد policy.
     *
     * @return mixed
     */
    public function policy(/* ... */): mixed;

    /**
     * متد before.
     *
     * @return mixed
     */
    public function before(/* ... */): mixed;

    /**
     * متد after.
     *
     * @return mixed
     */
    public function after(/* ... */): mixed;

    /**
     * متد allows.
     *
     * @return mixed
     */
    public function allows(/* ... */): mixed;

    /**
     * متد denies.
     *
     * @return mixed
     */
    public function denies(/* ... */): mixed;

    /**
     * متد check.
     *
     * @return mixed
     */
    public function check(/* ... */): mixed;

    /**
     * متد any.
     *
     * @return mixed
     */
    public function any(/* ... */): mixed;

    /**
     * متد authorize.
     *
     * @return mixed
     */
    public function authorize(/* ... */): mixed;

    /**
     * متد forUser.
     *
     * @return mixed
     */
    public function forUser(/* ... */): mixed;

    /**
     * متد abilities.
     *
     * @return mixed
     */
    public function abilities(/* ... */): mixed;
}