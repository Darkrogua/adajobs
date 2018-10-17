<?php namespace Vdomah\Employ;

use Event;
use Lovata\Buddies\Controllers\Users;
use Lovata\Buddies\Models\User;
use System\Classes\PluginBase;
use Vdomah\Employ\Classes\Roles;
use Vdomah\Employ\Controllers\Employers;
use Vdomah\Employ\Controllers\Seekers;
use Vdomah\Roles\Models\Role;

class Plugin extends PluginBase
{
    public $require = ['Lovata.Buddies', 'Vdomah.Roles', 'RainLab.Location', 'VojtaSvoboda.LocationTown'];

    public function registerComponents()
    {
        return [
            'Vdomah\Employ\Components\Jobs' => 'employJobs',
            'Vdomah\Employ\Components\Search' => 'employSearch',
            'Vdomah\Employ\Components\Filter' => 'employFilter',
        ];
    }

    public function registerSettings()
    {
    }

    public function boot()
    {
        User::saved(function($model) {
            $skills = post('skills', []);
            if (count($skills))
                $model->skills()->sync($skills);
        });
//        User::created(function($model) {
//            dd(post());
//        });
        User::extend(function($model) {
            $model->addFillable([
                'role_id',
                'about',
                'institution_id',
                'city_id',
                'company_name',
                'company_description',
                'company_website',
                'suburb',
                'age',
                'gender',
                'ic',
                'qualification',
            ]);

            $model->attachOne['resume'] = 'System\Models\File';
            $model->hasMany['jobs'] = 'Vdomah\Employ\Models\Job';
            $model->belongsTo['city'] = 'VojtaSvoboda\LocationTown\Models\Town';
            $model->belongsTo['institution'] = 'Vdomah\Employ\Models\Institution';
            $model->belongsToMany['favs'] = [
                'Vdomah\Employ\Models\Job',
                'table' => 'vdomah_employ_fav_user',
            ];
            $model->belongsToMany['jobs_applied'] = [
                'Vdomah\Employ\Models\Job',
                'table' => 'vdomah_employ_job_applicant',
            ];
            $model->belongsToMany['skills'] = [
                'Vdomah\Employ\Models\Skill',
                'table' => 'vdomah_employ_skill_user',
            ];

            $model->addDynamicMethod('getFullnameAttribute', function () use ($model) {
                return $model->name . ' ' . $model->surname;
            });
            $model->addDynamicMethod('scopeSkillsFilter', function ($q, $vals) {
                $q->whereHas('skills', function ($q) use ($vals) {
                    $q->whereIn('id', $vals);
                });
            });
            $model->addDynamicMethod('getGenderTitleAttribute', function () use ($model) {
                $vals = ['m' => 'Male', 'f' => 'Female'];

                return isset($vals[$model->gender]) ? $vals[$model->gender] : 'Male';
            });
            $model->addDynamicMethod('getSkillsStrAttribute', function () use ($model) {
                return $model->skills->count() ? $model->skills->pluck('name')->implode(', ') : '';
            });
        });

        $seeker_role = Roles::getOrCreateRole('seeker');
        $employer_role = Roles::getOrCreateRole('employer');

        $trigger_seeker = [
            'action' => 'hide',
            'field' => 'role',
            'condition' => 'value[' . $employer_role->id . ']',
        ];

        $trigger_employer = [
            'action' => 'hide',
            'field' => 'role',
            'condition' => 'value[' . $seeker_role->id . ']',
        ];

        $tab_fields = [
            'seeker' => [
                'role' => [
                    'label'     => 'vdomah.roles::lang.fields.role',
                    'tab'       => 'vdomah.roles::lang.fields.role',
                    'default'      => $seeker_role->id,
                    //'readOnly'  => true,
                    'span'      => 'auto',
                    'type'      => 'relation',
                ],
                'age' => [
                    'label'     => 'vdomah.employ::lang.fields.age',
                    'tab'       => 'vdomah.roles::lang.fields.role',
                    'span'      => 'auto',
                    'type'      => 'number',
                    'trigger'   => $trigger_seeker,
                ],
                'ic' => [
                    'label'     => 'vdomah.employ::lang.fields.ic',
                    'tab'       => 'vdomah.roles::lang.fields.role',
                    'span'      => 'auto',
                    'trigger'   => $trigger_seeker,
                ],
                'gender' => [
                    'label'     => 'vdomah.employ::lang.fields.gender',
                    'type'      => 'dropdown',
                    'options'   => [
                        'm' => 'Male',
                        'f' => 'Female',
                    ],
                    'tab'       => 'vdomah.roles::lang.fields.role',
                    'span'      => 'auto',
                    'trigger'   => $trigger_seeker,
                ],

                'skills' => [
                    'label'     => 'vdomah.employ::lang.menu.skills',
                    'tab'       => 'vdomah.roles::lang.fields.role',
                    'mode'      => 'relation',
                    'type'      => 'taglist',
                    'span'      => 'auto',
                    'trigger'   => $trigger_seeker,
                ],
                'institution' => [
                    'label'     => 'vdomah.employ::lang.fields.institution',
                    'tab'       => 'vdomah.roles::lang.fields.role',
                    'type'      => 'relation',
                    'span'      => 'auto',
                    'trigger'   => $trigger_seeker,
                ],
                'resume' => [
                    'label'     => 'vdomah.employ::lang.fields.resume',
                    'tab'       => 'vdomah.roles::lang.fields.role',
                    'type'      => 'fileupload',
                    'span'      => 'auto',
                    'mode'      => 'file',
                    'trigger'   => $trigger_seeker,
                ],
                'about' => [
                    'label'     => 'vdomah.employ::lang.fields.about',
                    'tab'       => 'vdomah.roles::lang.fields.role',
                    'type'      => 'richeditor',
                    'span'      => 'auto',
                    'trigger'   => $trigger_seeker,
                ],
            ],

            'employer' => [
                'role' => [
                    'label'     => 'vdomah.roles::lang.fields.role',
                    'tab'       => 'vdomah.roles::lang.fields.role',
                    'default'   => $employer_role->id,
                    //'readOnly'  => true,
                    'span'      => 'auto',
                    'type'      => 'relation',
                ],
                'company_name' => [
                    'label'     => 'vdomah.employ::lang.fields.company_name',
                    'tab'       => 'vdomah.roles::lang.fields.role',
                    'span'      => 'auto',
                    'trigger'   => $trigger_employer,
                ],
                'company_description' => [
                    'label'     => 'vdomah.employ::lang.fields.company_description',
                    'tab'       => 'vdomah.roles::lang.fields.role',
                    'type'      => 'richeditor',
                    'span'      => 'auto',
                    'trigger'   => $trigger_employer,
                ],
                'company_website' => [
                    'label'     => 'vdomah.employ::lang.fields.company_website',
                    'tab'       => 'vdomah.roles::lang.fields.role',
                    'span'      => 'auto',
                    'trigger'   => $trigger_employer,
                ],
                'suburb' => [
                    'label'     => 'vdomah.employ::lang.fields.suburb',
                    'tab'       => 'vdomah.roles::lang.fields.role',
                    'span'      => 'auto',
                    'trigger'   => $trigger_employer,
                ],
            ],
        ];

        Seekers::extendFormFields(function($form, $model, $context) use ($tab_fields, $seeker_role) {

            if (!$model instanceof User)
                return;

            if (!in_array($form->getController()->getId(), ["Seekers-update", "Seekers-create"]))
                return;

            $form->addTabfields($tab_fields['seeker']);
        });

        Employers::extendFormFields(function($form, $model, $context) use ($tab_fields, $employer_role) {

            if (!$model instanceof User)
                return;

            if (!in_array($form->getController()->getId(), ["Employers-update", "Employers-create"]))
                return;

            $form->addTabfields($tab_fields['employer']);
        });

        Event::listen('backend.list.extendColumns', function($widget) {

            if (!$widget->getController() instanceof Employers) {
                return;
            }

            if (!$widget->model instanceof User) {
                return;
            }

            $widget->addColumns([

                'company_name' => [
                    'label'     => 'vdomah.employ::lang.fields.company_name',
                    'tab'       => 'vdomah.roles::lang.fields.role',
                ],
//                'company_description' => [
//                    'label'     => 'vdomah.employ::lang.fields.company_description',
//                ],
                'company_website' => [
                    'label'     => 'vdomah.employ::lang.fields.company_website',
                ],
                'suburb' => [
                    'label'     => 'vdomah.employ::lang.fields.suburb',
                ],
                'city' => [
                    'label'     => 'vdomah.employ::lang.fields.city',
                    'type' => 'relation',
                    'relation' => 'city',
                    'sortable'  => false,
                    'searchable'  => false,
                    'select' => 'name',
                ],
            ]);
        });

        Event::listen('backend.list.extendColumns', function($widget) {

            if (!$widget->getController() instanceof Seekers) {
                return;
            }

            if (!$widget->model instanceof User) {
                return;
            }

            $widget->addColumns([
//                'role' => [
//                    'label'     => 'vdomah.roles::lang.fields.role',
//                    'select' => 'name',
//                    'relation' => 'role',
//                ],
                'fullname' => [
                    'label'     => 'vdomah.employ::lang.fields.fullname',
                ],
                'age' => [
                    'label'     => 'vdomah.employ::lang.fields.age',
                ],
                'ic' => [
                    'label'     => 'vdomah.employ::lang.fields.ic',
                ],
                'gender_title' => [
                    'label'     => 'vdomah.employ::lang.fields.gender',
                    'sortable'  => false,
                    'searchable'  => false,
                ],

                'skills_str' => [
                    'label'     => 'vdomah.employ::lang.menu.skills',
                    'sortable'  => false,
                    'searchable'  => false,
                ],
                'institution' => [
                    'label'     => 'vdomah.employ::lang.fields.institution',
                    'relation' => 'institution',
                    'select' => 'name',
                ],
//                'about' => [
//                    'label'     => 'vdomah.employ::lang.fields.about',
//                ],
            ]);
        });
    }
}
