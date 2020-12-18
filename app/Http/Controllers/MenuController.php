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
            'menu_news_category' => ['required', 'numeric'],
            'menu_position' => ['required', 'numeric']
        ]);
        $data = [
            'name' => $request->menu_name,
            'news_category_id' => $request->menu_news_category,
            'position' => $request->menu_position,
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
            'menu_news_category' . $menu->id => ['required', 'numeric'],
            'menu_position' . $menu->id => ['required', 'numeric']
        ]);
        $data = [
            'name' => $request->input('menu_name' . $menu->id),
            'news_category_id' => $request->input('menu_news_category' . $menu->id),
            'position' => $request->input('menu_position' . $menu->id),
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
