<?php namespace Vdomah\Employ\Components;

use Cms\Classes\ComponentBase;
use Redirect;
use Vdomah\Employ\Classes\JobRepository;
use Vdomah\Employ\Models\Application;
use Vdomah\Employ\Models\Job;
use Exception;
use Lang;
use Auth;
use Lovata\Buddies\Facades\AuthHelper;

class Jobs extends ComponentBase
{
    const MODE_ALL = 'all';
    const MODE_FAVS = 'favs';
    const MODE_APPLIED = 'applied';

    public $models;

    public function componentDetails()
    {
        return [
            'name'        => 'vdomah.employ::lang.components.jobs_title',
            'description' => 'vdomah.employ::lang.components.jobs_description'
        ];
    }

    public function defineProperties()
    {
        return [
            'mode' => [
                'title'   => 'vdomah.employ::lang.components.property_mode',
                'type'    => 'dropdown',
                'options' => [
                    self::MODE_ALL => Lang::get('vdomah.employ::lang.components.mode_'.self::MODE_ALL),
                    self::MODE_FAVS   => Lang::get('vdomah.employ::lang.components.mode_'.self::MODE_FAVS),
                    self::MODE_APPLIED   => Lang::get('vdomah.employ::lang.components.mode_'.self::MODE_APPLIED),
                ],
            ],
        ];
    }

    public function onRun()
    {
        $mode = $this->property('mode');
        switch ($mode) {
            case self::MODE_ALL:
                $this->models = $this->getModelsFiltered();
                break;
            case self::MODE_FAVS:
                $this->models = $this->getModelsFav();
                break;
            case self::MODE_APPLIED:
                $this->models = $this->getModelsApplied();
                break;
            default:
                $this->models = $this->getModelsFiltered();
                break;
        }
    }

    public function onFav()
    {
        try {
            if (!AuthHelper::check())
                return redirect('register');
                //throw new Exception(Lang::get('vdomah.employ::lang.message.e_user_not_auth'));

            if (!post('job_id'))
                throw new Exception(Lang::get('vdomah.employ::lang.message.e_no_params'));

            $model = Job::find(post('job_id'));
            if (!$model)
                throw new Exception(Lang::get('vdomah.employ::lang.message.e_no_job_found'));

            $user = AuthHelper::getUser();
            $user_id = $user->id;

            if ($model->favers->contains($user_id)) {
                $model->favers()->detach($user_id);

                $msg = Lang::get('vdomah.employ::lang.message.favs_removed');
            } else {
                $model->favers()->attach($user_id);

                $msg = Lang::get('vdomah.employ::lang.message.favs_added');
            }

            $model->load('favers');

            return response()->json([
                'result' => 1,
                'msg' => $msg,
                '#job-block-' . $model->id => $this->renderPartial('::_item', compact('model')),
            ]);
        } catch (Exception $e) {
            return response()->json(['result' => 0, 'msg' => $e->getMessage(), 'line' => $e->getLine(), 'file' => $e->getFile()], 400);
        }
    }

    public function onApply()
    {
        try {
            if (!AuthHelper::check())
                return redirect('register');
                //throw new Exception(Lang::get('vdomah.employ::lang.message.e_user_not_auth'));

            if (!post('job_id'))
                throw new Exception(Lang::get('vdomah.employ::lang.message.e_no_params'));

            $model = Job::find(post('job_id'));
            if (!$model)
                throw new Exception(Lang::get('vdomah.employ::lang.message.e_no_job_found'));

            $user = AuthHelper::getUser();
            $user_id = $user->id;
            $application = $model->applications()->where('user_id', $user_id)->first();

            if ($application) {
                $application->delete();

                $msg = Lang::get('vdomah.employ::lang.message.applicants_removed');
            } else {
                $application = Application::create([
                    'user_id' => $user_id,
                    'job_id' => $model->id,
                    'text' => '',
                ]);

                $msg = Lang::get('vdomah.employ::lang.message.applicants_added');
            }

            $model->load('applications');

            return response()->json([
                'result' => 1,
                'msg' => $msg,
                '#job-block-' . $model->id => $this->renderPartial('::_item', compact('model')),
            ]);
        } catch (Exception $e) {
            return response()->json(['result' => 0, 'msg' => $e->getMessage(), 'line' => $e->getLine(), 'file' => $e->getFile()], 400);
        }
    }

    public function getModelsFiltered()
    {
        $filters = JobRepository::parseFiltersFromGet();

        return JobRepository::getJobsFiltered($filters);
    }

    public function getModelsFav()
    {
        return JobRepository::getJobsFav();
    }

    public function getModelsApplied()
    {
        return JobRepository::getJobsApplied();
    }
}