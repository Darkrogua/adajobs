<?php namespace Vdomah\Employ\Classes;

use Vdomah\Roles\Models\Role;

class Roles
{
    public static function getOrCreateRole($code)
    {
        $role = Role::where('code', $code)->first();

        if (!$role) {
            $role = Role::create([
                'name' => ucfirst($code),
                'code' => $code,
            ]);
        }

        return $role;
    }
}