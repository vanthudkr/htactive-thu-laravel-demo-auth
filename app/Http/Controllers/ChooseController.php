<?php

namespace App\Http\Controllers;

use App\Choose;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ChooseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chooses = Choose::where('is_deleted', '1')->orderBy('id', 'asc')->paginate(3);
        return view('auth.chooses.index', compact('chooses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.chooses.create');
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
            'image' => 'required',
            'content' => 'required',
            'is_deleted'
        ]);

        $input = $request->all();
        $input['is_deleted'] = 1;
        if ($request->hasFile('image')) {
            $filename = $request->file('image')->getClientOriginalName();
            $request->image->move('img/', $filename);
            $input['image'] = 'img/' . $filename;
        };
        Choose::create($input);
        return redirect('admin/choose')->with('success', 'The choose ' . $input['title'] . ' has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Choose  $choose
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $choose = Choose::findOrFail($id);
        return view('auth.chooses.show', compact('choose'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Choose  $choose
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $choose = Choose::findOrFail($id);
        return view('auth.chooses.edit', compact('choose'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Choose  $choose
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $choose = Choose::findOrFail($id);

        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'image',
            'is_deleted'
        ]);

        $input = $request->all();
        $input['is_deleted'] = 1;
        if ($request->hasFile('image')) {
            $filename = $request->file('image')->getClientOriginalName();
            $request->image->move('img/', $filename);
            $input['image'] = 'img/' . $filename;
        };

        $image = $choose->image;
        File::delete($image);
        $choose->update($input);
        return redirect('admin/choose')->with('success', 'The choose ' . $choose->title . ' has edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Choose  $choose
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $choose = Choose::findOrFail($id);
        $image = $choose->image;
        File::delete($image);
        $choose->delete($id);
        return back()->with('success', 'You are deleted a record.');
    }
}
