<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
public function run()
{
// Створення ролей
$adminRole = Role::create(['name' => 'admin']);
$productManagerRole = Role::create(['name' => 'product manager']);
$orderManagerRole = Role::create(['name' => 'order manager']);
$customerRole = Role::create(['name' => 'customer']);

// Створення дозволів
$manageProductsPermission = Permission::create(['name' => 'manage products']);
$manageOrdersPermission = Permission::create(['name' => 'manage orders']);
$manageUsersPermission = Permission::create(['name' => 'manage users']);
$viewOrdersPermission = Permission::create(['name' => 'view orders']);
$placeOrdersPermission = Permission::create(['name' => 'place orders']);

// Надання дозволів ролям
$adminRole->givePermissionTo([
$manageProductsPermission,
$manageOrdersPermission,
$manageUsersPermission,
$viewOrdersPermission,
$placeOrdersPermission,
]);

$productManagerRole->givePermissionTo($manageProductsPermission);
$orderManagerRole->givePermissionTo($manageOrdersPermission);
$customerRole->givePermissionTo($placeOrdersPermission);
$customerRole->givePermissionTo($viewOrdersPermission); // Можливо, клієнти також можуть переглядати свої замовлення

// За потреби, ви можете надати всі дозволи супер-адміністратору
 $adminRole->givePermissionTo(Permission::all());
}
}
