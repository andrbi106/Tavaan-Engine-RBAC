<?php

declare(strict_types=1);

namespace Tavaan\Engine\Rbac;

use Tavaan\Core\Contracts\Container\ContainerInterface;
use Tavaan\Core\Contracts\Config\RepositoryInterface as ConfigRepository;
use Tavaan\Engine\Rbac\Contracts\GateInterface;
use Tavaan\Core\Provider\ServiceProvider;

/**
 * GateServiceProvider — ثبت سرویس‌های موتور Gate.
 */
final class GateServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(GateInterface::class, function (ContainerInterface $app) {
            /** @var ConfigRepository $config */
            $config = $app->get(ConfigRepository::class);
            return new Gate($config);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
        // ثبت Facade
        $this->app->instance('gate', $this->app->get(GateInterface::class));

        // ثبت commandها
        $this->commands[] = \Tavaan\Engine\Rbac\Console\Rbac_syncCommand::class;

    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            GateInterface::class,
            'gate',
        ];
    }
}