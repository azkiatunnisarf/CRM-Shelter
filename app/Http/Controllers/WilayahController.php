<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\wilayah;
use App\Area;

class WilayahController extends Controller
{
    public function insert()
    {
        $data['areas'] = area::all();
        return view('/admin/wilayah/insert_wilayah',$data);
    }
    public function index()
    {   
        $data['areas'] = area::all();
        $data['wilayahs'] = wilayah::all();
        $data['no'] = 1;
        return view('admin/wilayah/wilayah', $data);
    }
    public function store(Request $request)
    {
      $this->validate($request,[
        'nama_wilayah'=>['required', 'string']
      ]);

      $wilayah = new wilayah;
      $wilayah->area_id   = $request->area_id;
      $wilayah->nama_wilayah = $request->nama_wilayah;
      

      if ($wilayah->save()){
        return redirect('/insert_wilayah')->with('success', 'item berhasil ditambahkan');
      }
      else{
        return redirect('/insert_wilayah')->with('error', 'item gagal ditambahkan');
      }
    }
    public function delete($wilayah_id){
        $wilayah = wilayah::findOrFail($wilayah_id)->delete();
        return redirect()->route('index.wilayah')->with('success', 'delete sukses');
    }
    public function edit($wilayah_id){
        $wilayah = wilayah::findOrFail($wilayah_id);
        return view('admin/wilayah/edit_wilayah')->with('wilayah', $wilayah);
    }
    public function update(Request $request, $id){
        $wilayah = wilayah::findorFail($id);
        $this->validate($request,[
          'nama_wilayah'=>['required', 'string']
        ]);
        $wilayah->nama_wilayah = $request->nama_wilayah;
  
        if ($wilayah->save())
          return redirect()->route('index.wilayah')->with(['success'=>'edit sukses']);
    }
}
