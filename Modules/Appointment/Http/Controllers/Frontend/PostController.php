<?php

namespace Modules\Appointment\Http\Controllers\Frontend;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;
use Flash;
use Illuminate\Support\Facades\Log;
use Illuminate\Foundation\Validation\ValidatesRequests;

class PostController extends Controller
{
    use ValidatesRequests;

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function __construct()
    {
        // Page Title
        $this->module_title = 'Appointment';

        // module name
        $this->module_name = 'appointement';

        // directory path of the module
        $this->module_path = 'appointement';

        // module icon
        $this->module_icon = 'fas fa-file-alt';

        // module model name, path
        $this->module_model = "Modules\Appointment\Entities\Appointment";
    }

    public function store(Request $request)
    {
        //dd($request);
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Store';
        $this->validate($request, [
            'name' => 'required',
            'treatment' => 'required',
            'doctor' => 'required',
            'phone' => 'required',
            //'email' => 'required',
            'time'=>'required',
        ]);
        $data = $request->all();
      //  $data['created_by_name'] = auth()->user()->name;

        $$module_name_singular = $module_model::create($data);
       // $$module_name_singular->tags()->attach($request->input('tags_list'));

       // event(new Created($$module_name_singular));

        Flash::success("<i class='fas fa-check'></i> New '".Str::singular($module_title)."' Added")->important();
        session()->flash('message', 'Send Successfully.');
        Log::info(label_case($module_title.' '.$module_action)." | '".$$module_name_singular->name);

        Log::info($$module_name_singular);

        return redirect(route('frontend.home'));
    }

}
