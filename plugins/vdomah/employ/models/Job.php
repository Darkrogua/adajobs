<?php namespace Vdomah\Employ\Models;

use Model;

/**
 * Model
 */
class Job extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'vdomah_employ_jobs';

    public $hasMany = [
        'applications' => 'Vdomah\Employ\Models\Application',
    ];

    public $belongsTo = [
        'user' => 'Lovata\Buddies\Models\User',
        'type' => 'Vdomah\Employ\Models\Type',
        'frequency' => 'Vdomah\Employ\Models\Frequency',
    ];

    public $belongsToMany = [
//        'applicants' => [
//            'Lovata\Buddies\Models\User',
//            'table' => 'vdomah_employ_job_applicant',
//        ],
        'favers' => [
            'Lovata\Buddies\Models\User',
            'table' => 'vdomah_employ_fav_user',
        ],
        'categories' => [
            'Vdomah\Employ\Models\Category',
            'table' => 'vdomah_employ_category_job',
        ],
    ];

    public function filterCreatedAt()
    {

    }

    public function scopeCategoriesFilter($q, $vals)
    {
        $q->whereHas('categories', function ($q) use ($vals) {
            $q->whereIn('id', $vals);
        });
    }

    public function getCategoriesStrAttribute()
    {
        return $this->categories->pluck('name')->implode(', ') ?: '';
    }
}
