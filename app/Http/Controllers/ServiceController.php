<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\CatService;

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
        return back()->with('success', 'Service has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    { }

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
        $catService = CatService::findOrFail($id);
        $this->validate($request, [
            'title' => 'required|min:5|max:35',
            'content' => 'required|min:5|max:500',
            'catService_id',
            'image',
        ], [
            'title.required' => 'The title field is required.',
            'title.min' => 'The title must be at least 5 characters.',
            'title.max' => 'The title may not be greater than 35 characters.',
            'content.required' => 'The content field is required.',
            'content.min' => 'The content must be at least 5 characters.',
            'content.max' => 'The content may not be greater than 500 characters.',
        ]);

        $input = $request->all();
        if ($request->hasFile('image')) {
            $filename = $request->file('image')->getClientOriginalName();
            $request->image->move('img/', $filename);
            $input['image'] = 'img/' . $filename;
        }
        $service->update($input);
        return redirect('auth.services.index')->with('success', 'The service has edited!');
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
