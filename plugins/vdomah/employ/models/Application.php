<?php namespace Vdomah\Employ\Models;

use Model;

/**
 * Model
 */
class Application extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $fillable = [
        'user_id',
        'job_id',
        'text',
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'vdomah_employ_applications';

    public $belongsTo = [
        'job' => 'Vdomah\Employ\Models\Job',
        'user' => 'Lovata\Buddies\Models\User',
    ];
}
