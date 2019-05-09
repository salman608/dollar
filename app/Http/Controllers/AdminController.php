<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }

    public function profile()
    {
        return view('admin.profile.profile');
    }

    public function setting()
    {   
        return view('admin.setting');
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
     * @param  \App\Admin  $Admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $Admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        $id = Auth::user()->id;

        $admin = Admin::find($id)->first();

        return view('admin.profile.editprofile')->with('admin',$admin);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $Admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $admin = Admin::find($id);
        $admin->update($request->all());

        return redirect('/admin/profile');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $Admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    } 
}
