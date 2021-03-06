<?php namespace Vdomah\Employ\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Vdomah\Employ\Classes\Roles;
use Vdomah\Roles\Models\Role;

class Seekers extends Controller
{
    public $implement = [
        'Backend\Behaviors\ListController',
        'Backend\Behaviors\FormController',
        'Backend.Behaviors.ImportExportController',
    ];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';
    public $importExportConfig = 'config_import_export.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Vdomah.Employ', 'employ', 'employ-seekers');
    }

    public function listExtendQuery($query)
    {
        $role = Roles::getOrCreateRole('seeker');

        if ($role)
            $query->where('role_id', $role->id);
    }
}