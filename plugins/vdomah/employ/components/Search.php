<?php namespace Vdomah\Employ\Components;

use Cms\Classes\ComponentBase;
use Vdomah\Employ\Classes\JobRepository;
use Vdomah\Employ\Models\Category;

class Search extends ComponentBase
{
    public $init_values;
    public $categories;

    public function componentDetails()
    {
        return [
            'name'        => 'vdomah.employ::lang.components.search_title',
            'description' => 'vdomah.employ::lang.components.search_description'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->init_values = JobRepository::parseSearchFromGet();
        $this->categories = Category::orderBy('name')->get();
    }

    public function onFilter()
    {
        $models = $this->getModelsFiltered();

        return response()->json([
            '#job-list' => $this->renderPartial('employJobs::default', compact('models')),
        ]);
    }

    public function getModelsFiltered()
    {
        $filters = JobRepository::parseFiltersFromGet();
        $search_params = JobRepository::parseSearchFromGet(true);

        return JobRepository::getJobsFiltered($filters, $search_params);
    }
}