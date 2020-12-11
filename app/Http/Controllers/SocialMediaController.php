<?php

namespace App\Http\Controllers;

use App\Models\SocialMedia;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
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
        $this->validate($request, [
            'social_media_name' => ['required', 'string', 'max:255'],
            'social_media_icon' => ['required', 'string', 'max:255'],
            'social_media_link' => ['required', 'string', 'max:1024']
        ]);
        $data = [
            'name' => $request->social_media_name,
            'icon' => $request->social_media_icon,
            'link' => $request->social_media_link,
        ];
        if (SocialMedia::insert($data)) {
            return back()->with(notification('success', 'Social Link Added Successfully.'));
        } else {
            return back()->with(notification('danger', 'Something Went Wrong!'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SocialMedia  $socialMedia
     * @return \Illuminate\Http\Response
     */
    public function show(SocialMedia $socialMedia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SocialMedia  $socialMedia
     * @return \Illuminate\Http\Response
     */
    public function edit(SocialMedia $socialMedia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SocialMedia  $socialMedia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SocialMedia $socialMedia)
    {
        $this->validate($request, [
            'social_media_name' . $socialMedia->id => ['required', 'string', 'max:255'],
            'social_media_icon' . $socialMedia->id => ['required', 'string', 'max:255'],
            'social_media_link' . $socialMedia->id => ['required', 'string', 'max:1024']
        ]);
        $data = [
            'name' => $request->input('social_media_name' . $socialMedia->id),
            'icon' => $request->input('social_media_icon' . $socialMedia->id),
            'link' => $request->input('social_media_link' . $socialMedia->id),
        ];
        if ($socialMedia->update($data)) {
            return back()->with(notification('success', 'Social Link Updated Successfully.'));
        } else {
            return back()->with(notification('danger', 'Something Went Wrong!'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SocialMedia  $socialMedia
     * @return \Illuminate\Http\Response
     */
    public function destroy(SocialMedia $socialMedia)
    {
        if ($socialMedia->delete()) {
            return back()->with(notification('success', 'Social Link Deleted Successfully.'));
        } else {
            return back()->with(notification('danger', 'Something Went Wrong!'));
        }
    }
}
