<?php

namespace App\Http\Controllers;

use App\AdminLogin;
use App\viewQuestion;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function loginFrame(){
        return view('admin/login');
    }
    public function login(request $request){
        $request->validate([
         'username'=>'required|min:8|max:16',
         'password'=>'required|min:8|max:64',
        ]);
        $count=AdminLogin::where('username',$request->username)->where('password',$request->password)->count();
        if($count==1){
           $request->session()->put('username', $request->username);
           $request->session()->put('password', $request->password);
           $r=$request->session()->get('username', $request->username);
           $r1=$request->session()->get('password', $request->password);
           $result=viewQuestion::orderBy('id', 'DESC')->get();
           return view('admin.viewQuestion',['result'=>$result]);
        }
    }
    public function logout(request $request){
        $request->session()->flush('password');
        $request->session()->flush('username');
        return view('admin.login');
    }
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
     * @param  \App\AdminLogin  $adminLogin
     * @return \Illuminate\Http\Response
     */
    public function show(AdminLogin $adminLogin)
    {
        //
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AdminLogin  $adminLogin
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminLogin $adminLogin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AdminLogin  $adminLogin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdminLogin $adminLogin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AdminLogin  $adminLogin
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminLogin $adminLogin)
    {
        //
    }
}
