<?php namespace Vdomah\Employ\Components;

use Cms\Classes\ComponentBase;
use Vdomah\Employ\Classes\Criteria;
use Vdomah\Employ\Classes\JobRepository;
use Vdomah\Employ\Models\Job;

class Filter extends ComponentBase
{
    public $filters;
    public $init_values;

    public function componentDetails()
    {
        return [
            'name'        => 'vdomah.employ::lang.components.filter_title',
            'description' => 'vdomah.employ::lang.components.filter_description'
        ];
    }

    public function defineProperties()
    {
        return [
            'jobs_list_selector' => [
                'title'   => 'vdomah.employ::lang.components.jobs_list_selector',
                'default' => '#job-list',
            ],
        ];
    }

    public function onRun()
    {
        $this->addJs('assets/js/filters.js');

        $this->filters = JobRepository::getFilters();
        $this->init_values = JobRepository::parseFiltersFromGet();
    }

    public function onFilter()
    {
        $models = $this->getModelsFiltered();
        $selector = $this->property('jobs_list_selector');

        return response()->json([
            $selector => $this->renderPartial('employJobs::default', compact('models')),
        ]);
    }

    public function getModelsFiltered()
    {
        $filters = JobRepository::parseFiltersFromGet(true);
        $search_params = JobRepository::parseSearchFromGet(true);

        return JobRepository::getJobsFiltered($filters, $search_params);
    }


}