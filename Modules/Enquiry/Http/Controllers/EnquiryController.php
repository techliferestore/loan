<?php

namespace Modules\Enquiry\Http\Controllers;
use App\Authorizable;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class EnquiryController extends Controller
{



    public function __construct()
    {
        // Page Title
        $this->module_title = 'Enquiry';

        // module name
        $this->module_name = 'enquiry';

        // directory path of the module
        $this->module_path = 'enquiry::backend';

        // module icon
        $this->module_icon = 'fas fa-enquiry';

        // module model name, path
        $this->module_model = "Modules\Query\Entities\Query";
    }
    /**
     * 
     * 
     * 
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('enquiry::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('enquiry::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('enquiry::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('enquiry::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
