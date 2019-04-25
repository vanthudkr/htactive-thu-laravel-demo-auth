<?php

namespace App\Http\Controllers;

use App\CatService;
use Illuminate\Http\Request;
use Dotenv\Regex\Success;

class CatServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catServices = CatService::where('is_deleted', '1')->paginate(3);
        return view('auth.catServices.index', compact('catServices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.catServices.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'id',
            'title' => 'required|max:255',
            'content' => 'required',
            'icon' => 'required|max:255',
            'parent_id',
            'is_deleted'
        ]);

        $input = $request->all();
        $input['is_deleted'] = 1;
        $input['parent_id'] = 13;
        CatService::create($input);

        return redirect('admin/catService')->with('success', 'The category of service ' . $input['title'] . ' has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CatService  $catService
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $catService = CatService::findOrFail($id);
        return view('auth.catServices.show', compact('catService'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CatService  $catService
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $catService = CatService::findOrFail($id);
        return view('auth.catServices.edit', compact('catService'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CatService  $catService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $catService = CatService::findOrFail($id);
        $this->validate($request, [
            'title' => 'required|max:255',
            'content' => 'required',
            'icon' => 'required|max:255',
            'parent_id',
            'is_deleted'
        ]);

        $input = $request->all();
        $input['is_deleted'] = 1;
        $input['parent_id'] = 1;
        $catService->update($input);

        return redirect('admin/catService')->with('success', 'The Category of Service ' . $catService->title . ' has edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CatService  $catService
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $catService = CatService::findOrFail($id);
        $catService->delete();

        return redirect('admin/catSer   vice')->with('success', 'The category of service has been deleted');
    }
}
