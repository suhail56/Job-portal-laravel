<?php

namespace App\Http\Controllers;
use App\MOdels\regok;
use Illuminate\Http\Request;
use DB;

class reg extends Controller
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
        $ab=new regok([
            'fname'=>$request->get('fname'),
            'lname'=>$request->get('lname'),
            'email'=>$request->get('email')
            ,'gender'=>$request->get('gender'),
            'password'=>$request->get('password')
        ]);
        if(sizeof(regok::where('email','=',$request->get('email'))->get()) > 0) return redirect()->back()->with('alert', 'This email is already registerd!');
        $ab->save();
        return redirect('/plogin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request)
    {
        $ab=$request->get('email');
        $ac=$request->get('password');
        $users = DB::table('regoks')->where([['email', '=', $ab],['password', '=', $ac],])->get();
       //var_dump($users);

    if(count($users))
    {
        $request->session()->put('data',$request->input());
        return view('postjob',compact('users'));
        //return redirect('/job'); 
    }
    else
    {
        return redirect()->back()->with('alert', 'Invalid Username or Password!!');
    }
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
