<?php

namespace App\Http\Controllers;
use App\MOdels\apply;
use Illuminate\Http\Request;
use DB;

class aply extends Controller
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
    public function store($id,$cid,$mail)
    {
        $ab = DB::table('registers')->where('email','=', session('datas')['email'] )->get();
        $ac = DB::table('posmms')->where('cid','=', $cid )->where('id','=', $id )->get();

        foreach($ab as $kk)
        {
        $data1 = $kk->id;
        $data2 = $kk->fname;
        $data3 = $kk->lname;
        $data4 = $kk->email;
        $data5 = $kk->password;
        $data6 = $kk->gender;
        $data7 = $kk->cv;
        }
        // echo $data1,$data2,$data3,$data4,$data5,$data6;

        foreach($ac as $kks)
        {
        $data11 = $kks->id;
        $data21 = $kks->cname;
        $data31 = $kks->jtitle;
        $data41 = $kks->location;
        $data51 = $kks->jdesc;
        $data61 = $kks->vaccancy;
        $data71 = $kks->cid;
       
        }
        // echo $data11,$data21,$data31,$data41,$data51,$data61,$data71;

        $cc = DB::table('applies')->insert([
            'cname'=>$data1,
            'jtitle'=>$data2,
            'location'=>$data3,
            'jdesc'=>$data4,
            'vaccancy'=>$data5,
            'cid'=>$data6,
            'cnames'=>$data11,
            'jtitles'=>$data21,
            'locations'=>$data31,
            'jdescs'=>$data41,
            'vaccancys'=>$data51,
            'cids'=>$data61,
            'cnameq'=>$data71,
            'cv'=>$data7,
            
            
            ]);
        // $ab->save();
        // return redirect('/jobvii')->back()->with('alert', 'Invalid Username or Password!!');
        return redirect('/jobvii') ->with('alert', 'Applied Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$cid)
    {
        $ac = DB::table('applies')->where('cnames','=', $id )->where('cnameq','=', $cid )->get();
        // var_dump($ac);
        return view('applied',compact('ac'));
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
