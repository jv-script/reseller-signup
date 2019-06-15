<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\User;
Use Datatables;
class UserInfoController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
        // $users = User::select([
        //     'id','name','email','created_at','updated_at'
        //     ])->get();
        //     dd($users);
        //     dd(Datatables::of($users)->toJson());
        // dd(route('ajaxUserData'));
        // dd(url('/getuser'));
        // dd(datatables()->of(User::all())->toJson()
    // );
    }
    public function getUserData()
    {
        // $users = User::select([
        //     'id','name','email','created_at','updated_at'
        //     ])->get();

        // return Datatables::of($users)->make();
    // return
    return datatables()->of(User::all())->toJson();
    // return datatables()->collection(User::all())->toJson();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.show-users');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user= User::find($id);
        // dd($user->userDetail->first_name);
        return view('auth.show-userinfo',compact('user'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}