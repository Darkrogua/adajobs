<?php namespace Vdomah\Employ\Models;

use Model;

/**
 * Model
 */
class Category extends Model
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

    /**
     * @var string The database table used by the model.
     */
    public $table = 'vdomah_employ_categories';

    public $belongsToMany = [
        'jobs' => [
            'Vdomah\Employ\Models\Job',
            'table' => 'vdomah_employ_category_job',
        ],
    ];
}
