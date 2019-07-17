<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Kontrak;
use App\mou;

class NoncrmController extends Controller
{
    public function index()
    {
        $data['kontrak'] = DB::table('kontrak')->count();
        $data['customers'] = DB::table('customer')->count();
        // $data['mou'] = DB::table('mou')->count();
        return view('/manager_noncrm/dashboard_noncrm',$data);
    }
    public function kontrak()
    {  
        $data['kontrak'] = kontrak::all();
        $data['no'] = 1;
        return view('manager_noncrm/noncrm_kontrak', $data);
    }
    public function mou()
    {  
        $data['mou'] = mou::all();
        $data['no'] = 1;
        return view('manager_noncrm/noncrm_mou', $data);
    }
}
