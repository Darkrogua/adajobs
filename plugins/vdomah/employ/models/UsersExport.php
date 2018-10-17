<?php namespace Vdomah\Employ\Models;

use Backend\Models\ExportModel;
use Lovata\Buddies\Models\User;
use Vdomah\Employ\Classes\Roles;
use Vdomah\Roles\Models\Role;

class UsersExport extends ExportModel
{
    public function exportData($columns, $sessionKey = null)
    {
        $users = Roles::getOrCreateRole('seeker')->users;
        $users->each(function($user) use ($columns) {
            $user->addVisible($columns);
        });

        return $users->toArray();
    }
}