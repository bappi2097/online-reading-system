<?php

namespace App\Http\Controllers;

use App\Models\Meta;
use Illuminate\Http\Request;

class MetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Meta  $meta
     * @return \Illuminate\Http\Response
     */
    public function show(Meta $meta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Meta  $meta
     * @return \Illuminate\Http\Response
     */
    public function edit(Meta $meta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Meta  $meta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meta $meta)
    {
        $this->validate($request, [
            "meta_title" => ['required', 'string'],
            'meta_author' => ['required', 'string', 'max:255'],
            'meta_description' => ['required', 'string'],
            'meta_keywords' => ['required', 'string'],
            'meta_copyright' => ['required', 'string'],
            'meta_logo' => ['nullable'],
            'meta_favicon' => ['nullable']
        ]);

        $data = [
            'title' => $request->input('meta_title'),
            'author' => $request->input('meta_author'),
            'description' => $request->input('meta_description'),
            'keyword' => $request->input('meta_keywords'),
            'copyright' => $request->input('meta_copyright')
        ];


        if ($request->hasFile('meta_logo')) {
            // unlink(public_path($meta->logo));
            $logo = uniqid(11) . '.' . $request->file('meta_logo')->getClientOriginalExtension();
            $request->file('meta_logo')->move(public_path('assets\\img'), $logo);
            $data["logo"] = '\\assets\\img\\' . $logo;
        }


        if ($request->hasFile('meta_favicon')) {
            // unlink(public_path($meta->favicon));
            $favicon = uniqid(11) . '.' . $request->file('meta_favicon')->getClientOriginalExtension();
            $request->file('meta_favicon')->move(public_path('assets\\img'), $favicon);
            $data["favicon"] = '\\assets\\img\\' . $favicon;
        }

        if ($meta->update($data)) {
            return back()->with(notification('success', 'Successfully Updated Meta Data'));
        } else {
            return back()->with(notification('danger', 'Something Went Wrong!'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Meta  $meta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meta $meta)
    {
        //
    }
}
