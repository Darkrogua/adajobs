<?php namespace Vdomah\Employ\Models;

use Model;

/**
 * Model
 */
class Skill extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $fillable = ['name'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'vdomah_employ_skills';

    public $belongsToMany = [
        'users' => [
            'class' => 'Lovata\Buddies\Models\User',
            'table' => 'vdomah_employ_skill_user',
        ],
    ];
}
