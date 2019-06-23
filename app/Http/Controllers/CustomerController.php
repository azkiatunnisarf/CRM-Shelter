<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Customer;
use App\bisnis_unit;
use App\area;
use App\wilayah;
use App\User;

class CustomerController extends Controller
{
    public function index()
    {  
        $data['customers'] = customer::all();
        $data['no'] = 1;
        return view('admin/customer/customer', $data);
    }
    public function insert()
    {
        $data['bisnis_units'] = bisnis_unit::all();
        $data['areas'] = area::all();
        $data['wilayahs'] = wilayah::all();
        $data['users'] = user::all();
        return view('/admin/customer/insert_customer',$data);
    }
    public function store(Request $request)
    {
      $this->validate($request,[
         'kode_customer'    =>['required', 'string']
        ,'nama_perusahaan'  =>['required', 'string']
        ,'jenis_usaha'      =>['required', 'string']
        ,'alamat'=>['required', 'string']
        ,'provinsi'=>['required', 'string']
        ,'kabupaten'=>['required', 'string']
        ,'telpon'=>['required', 'string']
        ,'fax'=>['required', 'string']
        ,'cp'=>['required', 'string']
      ]);

      $customer = new customer;
      $customer->kode_customer      = $request->kode_customer;
      $customer->nama_perusahaan    = $request->nama_perusahaan;
      $customer->jenis_usaha        = $request->jenis_usaha;
      $customer->bu_id              = $request->bu_id;
      $customer->alamat             = $request->alamat;
      $customer->provinsi           = $request->provinsi;
      $customer->kabupaten          = $request->kabupaten;
      $customer->telpon             = $request->telpon;
      $customer->fax                = $request->fax;
      $customer->cp                 = $request->cp;
      $customer->area_id            = $request->area_id;
      $customer->wilayah_id         = $request->wilayah_id;
      $customer->email              = $request->email;
      

      if ($customer->save()){
        return redirect('/insert_customer')->with('success', 'item berhasil ditambahkan');
      }
      else{
        return redirect('/insert_customer')->with('error', 'item gagal ditambahkan');
      }
    }
}
