<?php

namespace App\Http\Controllers;
use App\MOdels\register;
use Illuminate\Http\Request;
use DB;

class registe extends Controller
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
        $files=$request->file('cv');
        $name=$files->getClientOriginalName();
        $files->move('images',$name);

        $ab=new register([
            'fname'=>$request->get('fname'),
            'lname'=>$request->get('lname'),
            'email'=>$request->get('email')
            ,'gender'=>$request->get('gender'),
            'password'=>$request->get('password'),
            'cv'=>$name
        ]);
        if(sizeof(register::where('email','=',$request->get('email'))->get()) > 0) return redirect()->back()->with('alert', 'This email is already registerd!');
        $ab->save();
        return redirect('/login');
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
    public function edit($email)
    {
        $qw=register::where('email', $email)->get();
        //  var_dump($qw);
        return view('editprofile',compact('qw'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updat(Request $request)
    {
        $ab=$request->get('email');
        $ac=$request->get('password');
        $users = DB::table('registers')->where([['email', '=', $ab],['password', '=', $ac],])->get();
       //var_dump($users);

    if(count($users))
    {
        // return view('findjob',compact('users'));
        $request->session()->put('datas',$request->input());
        return redirect('/jobvi'); 
    }
    else
    {
        return redirect()->back()->with('alert', 'Invalid Username or Password!!');
    }
    }

    public function update(Request $request, $id)
    {
        $qw=register::find($id);
        // var_dump($qw);
        $qw->fname=$request->get('fname');
        $qw->lname=$request->get('lname');

        $files=$request->file('cv');
        if($files != '')
        {
        $name=$files->getClientOriginalName();
        $files->move('images',$name);
        $qw->cv=$name;
        } 

        $qw->save();
        return redirect('/jobvi');
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
