<?php

declare(strict_types=1);

namespace Tavaan\Engine\Rbac\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * rbac:sync command.
 */
final class RbacSyncCommand implements CommandInterface
{
    public function name(): string
    {
        return 'rbac:sync';
    }

    public function description(): string
    {
        return 'Run rbac:sync (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
