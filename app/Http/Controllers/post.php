<?php

namespace App\Http\Controllers;
use App\MOdels\posmm;
use Illuminate\Http\Request;
use DB;

class post extends Controller
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

    public function jobview()
    {
        $ab=posmm::all();
        return view('findjob',compact('ab'));
    }

    public function postedview()
    {
        //$ab=posmm::all();
        $ab = DB::table('posmms')->where('cid', session('data')['email'] )->get();
        return view('postedjobs',compact('ab'));
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
        $ab=new posmm([
            'cname'=>$request->get('cname'),
            'jtitle'=>$request->get('jtitle'),
            'location'=>$request->get('location')
            ,'jdesc'=>$request->get('jdesc'),
            'vaccancy'=>$request->get('vaccancy'),
            'cid'=>$request->get('cid')
            ,'salary'=>$request->get('salary'),
            'qualification'=>$request->get('qualification'),
            'experience'=>$request->get('experience')
        ]);
        $ab->save();
        return redirect('/postjob');
    }
    public function storess(Request $request)
    {
        $k=$request->get('search');

        $ab = DB::table('posmms')
        ->where('cname','like','%'. $k.'%')
        ->orwhere('jtitle','like','%'. $k.'%')
        ->orwhere('location','like','%'. $k.'%')
        ->orwhere('jdesc','like','%'. $k.'%')
        ->orwhere('qualification','like','%'. $k.'%')
        ->get();
        // var_dump($users);
        return view('findjob',compact('ab'));
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
        $qw=posmm::find($id);
        // var_dump($qw);exit;
        return view('editjob',compact('qw'));
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
        $qw=posmm::find($id);
        $qw->cname=$request->get('cname');
        $qw->jtitle=$request->get('jtitle');
        $qw->location=$request->get('location');
        $qw->jdesc=$request->get('jdesc');
        $qw->vaccancy=$request->get('vaccancy');
        $qw->cid=$request->get('cid');
        $qw->salary=$request->get('salary');
        $qw->qualification=$request->get('qualification');
        $qw->experience=$request->get('experience');
        $qw->save();
        return redirect('/pop');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $qw=posmm::find($id);
        $qw->delete();
        return redirect('/pop');
    }
}
