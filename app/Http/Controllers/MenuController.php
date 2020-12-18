<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
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
            'menu_name' => ['required', 'string', 'max:255'],
            'menu_icon' => ['required', 'string', 'max:255'],
            'menu_link' => ['required', 'string', 'max:1024']
        ]);
        $data = [
            'name' => $request->menu_name,
            'icon' => $request->menu_icon,
            'link' => $request->menu_link,
        ];
        if (Menu::insert($data)) {
            return back()->with(notification('success', 'Menu Added Successfully.'));
        } else {
            return back()->with(notification('danger', 'Something Went Wrong!'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        $this->validate($request, [
            'menu_name' . $menu->id => ['required', 'string', 'max:255'],
            'menu_icon' . $menu->id => ['required', 'string', 'max:255'],
            'menu_link' . $menu->id => ['required', 'string', 'max:1024']
        ]);
        $data = [
            'name' => $request->input('menu_name' . $menu->id),
            'icon' => $request->input('menu_icon' . $menu->id),
            'link' => $request->input('menu_link' . $menu->id),
        ];
        if ($menu->update($data)) {
            return back()->with(notification('success', 'Menu Updated Successfully.'));
        } else {
            return back()->with(notification('danger', 'Something Went Wrong!'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        if ($menu->delete()) {
            return back()->with(notification('success', 'Menu Deleted Successfully.'));
        } else {
            return back()->with(notification('danger', 'Something Went Wrong!'));
        }
    }
}
