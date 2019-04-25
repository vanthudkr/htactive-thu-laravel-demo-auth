<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\CatService;
// use Symfony\Component\HttpFoundation\Session\Session;
use Session;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::where('is_deleted', '1')->paginate(3);
        return view('auth.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catService = CatService::pluck('title', 'id')->all();
        return view('auth.services.create', compact('catService'));
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
            'title' => 'required',
            'content' => 'required',
            'catService_id' => 'required',
            'image',
            'is_deleted'
        ]);

        $input = $request->all();
        $input['is_deleted'] = 1;
        if ($request->hasFile('image')) {
            $filename = $request->file('image')->getClientOriginalName();
            $request->image->move('img/', $filename);
            $input['image'] = 'img/' . $filename;
        }

        Service::create($input);
        return redirect('admin/service')->with('success', 'The service ' . $input['title'] . ' has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service = Service::findOrFail($id);
        return view('auth.services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        $catService = CatService::all();
        return view('auth.services.edit', compact('service', 'catService'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'catService_id' => 'required',
            'is_deleted',
            'image',
        ]);
        $input = $request->all();
        $input['is_deleted'] = 1;
        if ($request->hasFile('image')) {
            $filename = $request->file('image')->getClientOriginalName();
            $request->image->move('img/', $filename);
            $input['image'] = 'img/' . $filename;
        }

        $image = $service->image;
        File::delete($image);
        $service->update($input);
        return redirect('admin/service')->with('success', 'The service ' . $service->title . ' has edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        $image = $service->image;
        File::delete($image);
        $service->delete();
        return redirect('admin/service')->with('success', 'Service has been deleted');
    }

    /** Function to back*/
    public function back()
    {
        return Redirect::back();
    }
}
