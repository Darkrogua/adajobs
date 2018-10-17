<?php namespace Vdomah\Employ\Classes;

use Lovata\Buddies\Facades\AuthHelper;
use Vdomah\Employ\Models\Job;

class JobRepository
{
    public static function getJobsFiltered($filters, $search_params = [])
    {
        $query = Job::query();

        $query = self::applyFilters($query, $filters);
        $query = self::applySearch($query, $search_params);

        $models = $query->get();

        return $models;
    }

    public static function applyFilters($query, $filters)
    {
        if (is_array($filters))
            foreach ($filters as $filter_code=>$filter) {
                if ($filter_code == 'created_at') {
                    $query = Criteria::createdAtCriteria($query, $filter);
                }
                if ($filter_code == 'type') {
                    $query = Criteria::typeCriteria($query, $filter);
                }
                if ($filter_code == 'salary') {
                    $query = Criteria::salaryCriteria($query, $filter);
                }
                if ($filter_code == 'category') {
                    $query = Criteria::categoryCriteria($query, $filter);
                }
                if ($filter_code == 'city') {
                    $query = Criteria::cityCriteria($query, $filter);
                }
            }

        return $query;
    }

    public static function applySearch($query, $search_params)
    {
        if (is_array($search_params))
            foreach ($search_params as $param=>$value) {
                if ($param == 'title') {
                    $query = Criteria::titleCriteria($query, $value);
                }
                if ($param == 'location') {
                    $query = Criteria::locationCriteria($query, $value);
                }
                if ($param == 'category_id' && $value > 0) {
                    $query = Criteria::categoryCriteria($query, [$value]);
                }
            }

        return $query;
    }

    public static function getFilters()
    {
        $filters = [
            'created_at' => [
                'name' => 'Date Posted',
                'code' => 'created_at',
                'type' => 'options',
                'options' => [
                    '24 hours' => '24 hours',
                    '3 days' => '3 days',
                    '7 days' => '7 days',
                    '30 days' => '30 days',
                ],
                'input' => 'radio',
            ],
            'type' => [
                'name' => 'Job Type',
                'code' => 'type',
                'type' => 'class',
                'class' => 'Vdomah\Employ\Models\Type',
                'input' => 'checkbox',
            ],
            'salary' => [
                'name' => 'Salary Pay Range',
                'code' => 'salary',
                'type' => 'range',
                'min' => 'salary_min',
                'max' => 'salary_max',
            ],
            'category' => [
                'name' => 'Category',
                'code' => 'category',
                'type' => 'class',
                'class' => 'Vdomah\Employ\Models\Category',
                'input' => 'checkbox',
            ],
            'city' => [
                'name' => 'City',
                'code' => 'city',
                'type' => 'class',
                'class' => 'VojtaSvoboda\LocationTown\Models\Town',
                'input' => 'checkbox',
            ],
        ];

        foreach ($filters as $k=>$filter) {
            if ($filter['type'] == 'class') {
                $class = $filter['class'];
                $filters[$k]['options'] = $class::pluck('name', 'id')->toArray();
            }
        }

        return $filters;
    }

    public static function parseFiltersFromGet($post = false)
    {
        $filters = self::getFilters();
        $post_filters = post('filters', []);
        $get_arr = is_array(get()) ? get() : [];

        $init_values = array_intersect_key($post ? $post_filters : $get_arr, $filters);

        foreach ($filters as $name=>$filter_data) {
            if (!isset($init_values[$name]) || !$init_values[$name])
                continue;

            $init_value = $init_values[$name];
            if (isset($filters[$name]['input']) && ($filters[$name]['input'] == 'checkbox' || $filters[$name]['input'] == 'radio')) {
                $init_value = str_replace('[','', $init_value);
                $init_value = str_replace(']','', $init_value);
            }
            if (isset($filters[$name]['input']) && $filters[$name]['input'] == 'checkbox') {
                $init_value = explode(',', $init_value);
            }
            if ($filters[$name]['type'] == 'range') {
                $arr = explode('-', $init_value);
                $arr[$filters[$name]['min']] = $arr[0];
                $arr[$filters[$name]['max']] = $arr[1];
                $init_value = $arr;
            }
            $init_values[$name] = $init_value;
        }

        return $init_values;
    }

    public static function getSearchParams()
    {
        $params = [
            'title' => [
                'name' => 'Title',
                'code' => 'title',
                'type' => 'text',
            ],
            'location' => [
                'name' => 'Location',
                'code' => 'location',
                'type' => 'text',
            ],
            'category_id' => [
                'name' => 'Category',
                'code' => 'category',
                'class' => 'Vdomah\Employ\Models\Category',
                'type' => 'dropdown',
            ],
        ];

        return $params;
    }

    public static function parseSearchFromGet($post = false)
    {
        $get_arr = is_array(get()) ? get() : [];
        $post_arr = is_array(post()) ? post() : [];

        $init_values = array_intersect_key($post ? $post_arr : $get_arr, self::getSearchParams());

        return $init_values;
    }

    public static function getJobsFav()
    {
        $jobs = Job::whereHas('favers', function ($q) {
            $q->where('id', AuthHelper::getUser()->id);
        })->get();

        return $jobs;
    }

    public static function getJobsApplied()
    {
        $jobs = Job::whereHas('applicants', function ($q) {
            $q->where('id', AuthHelper::getUser()->id);
        })->get();

        return $jobs;
    }
}