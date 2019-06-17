<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Call;

class callController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['calls'] = Call::orderBy('call_id','desc');
        return view('officer/call', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $callId = $request->call_id;
        $call   =   Call::updateOrCreate(['call_id' => $callId],
                    ['nama_customer' => $request->nama_customer, 
                    'spv_pic' => $request->spv_pic,
                    'tanggal_call' => $request->tanggal_call, 
                    'jam_call' => $request->jam_call,
                    'pembicaraan' => $request->pembicaraan, 
                    'pic_called' => $request->pic_called,
                    'hal_menonjol' => $request->hal_menonjol
                    ]);
    
        return Response::json($call);
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
    public function edit($call_id)
    {
        $where = array('call_id' => $call_id);
        $call  = Call::where($where)->first();
 
        return Response::json($call);
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
    public function destroy($call_id)
    {
        $call = Call::where('call_id',$call_id)->delete();
        return Response::json($call);
    }
}
