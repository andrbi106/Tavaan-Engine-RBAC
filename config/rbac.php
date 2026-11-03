<?php

declare(strict_types=1);

/*|--------------------------------------------------------------------------
 | Rbac Engine Configuration
 |--------------------------------------------------------------------------
 |
 | پیکربندی موتور rbac — همهٔ کلیدهای مستندشده در `docs/03-engines/rbac.md` بخش «پیکربندی».
 |
 |@see https://github.com/Derogaramin/Tavaan-Doc/blob/main/docs/03-engines/rbac.md
 */

return [
    /*| پیش‌فرض موتور (driver/store یا حالت فعال) */
    'default' => env('RBAC_DEFAULT', 'default'),

    /*| کلید کش (در صورت استفاده) */
    'prefix' => env('RBAC_PREFIX', 'rbac:'),

    /*| تنظیمات لاگ */
    'log' => [
        'channel' => env('RBAC_LOG_CHANNEL', 'rbac'),
    ],

    /*| Facade */
    'facade' => [
        'name' => 'Gate',
        'accessor' => 'gate',
    ],

    /*| سایر کلیدها (طبق مستندات) */
    'options' => [
        // TODO: کلیدهای اضافی طبق سند §۶ (پیکربندی)
    ],
];