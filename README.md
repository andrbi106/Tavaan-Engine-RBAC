# Tavaan Engine — RBAC

> **نقش و کنترل دسترسی** — موتور RBAC در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.rbac` |
| نام | `RBAC` |
| عنوان فارسی | نقش و کنترل دسترسی |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Engine\Rbac` |
| نوع | `engine` |
| Facade | `Gate` (accessor: `gate`) |

## توضیحات

M4 — RBAC+ABAC با Gate/Policy، سلسله‌مراتب نقش، wildcard، delegation موقت، Row-Level Scope، sync از manifest ماژول‌ها.

## قراردادها (Contracts)

این موتور قراردادهای زیر را ارائه می‌دهد:

- `Tavaan\Engine\Rbac\Contracts\GateInterface`
- `Tavaan\Engine\Rbac\Contracts\ResponseInterface`

## خطاها (Exceptions)

- `Tavaan\Engine\Rbac\Exceptions\AuthorizationException`

## Facadeها

- `Tavaan\Engine\Rbac\Facades\Gate`

## کلاس‌های اصلی

- `src/Concerns/HasRoles.php`
- `src/Console/RbacSyncCommand.php`
- `src/Gate.php`
- `src/GateResponse.php`
- `src/PermissionResolver.php`
- `src/PermissionSync.php`
- `src/RoleManager.php`
- `src/Scopes/OwnershipScope.php`
- `src/Testing/OrderFixture.php`
- `src/Testing/OrderPolicyFixture.php`
- `src/Testing/RbacTestUser.php`
- `src/rbac.php`

## Service Providerها

- `Tavaan\Engine\Rbac\GateServiceProvider`

## وابستگی‌ها

**موتورهای مورد‌نیاز:**

- `auth`
- `database`
- `cache`
- `event`
- `config`

## جداول دیتابیس

- `tvn_permissions`
- `tvn_roles`
- `tvn_role_user`
- `tvn_permission_role`
- `tvn_delegations`

## دستورات CLI

- `rbac:sync`

## پیکربندی

- فایل پیکربندی: `config/rbac.php`
- کلید: `rbac`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-RBAC.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-RBAC`** (این مخزن) | موتور RBAC |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.
