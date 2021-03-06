<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Kontrak;
use App\Exports\KontrakExport;
use Maatwebsite\Excel\Facades\Excel;
use DB;

class KontrakController extends Controller
{
    public function index()
    {
        $data['kontraks'] = Kontrak::all();
        return view('officer/kontrak', $data);
    }

    public function insert()
    {
      return view('officer/insertkontrak');
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
        $request->validate([
            'kode_customer' => 'required',
            'nama_perusahaan' => 'required',
            'periode_kontrak' => 'required|date',
            'akhir_periode' => 'required',
            'srt_pemberitahuan' => 'required',
            'tgl_srt_pemberitahuan' => 'required',
            'srt_penawaran' =>'required',
            'tgl_srt_penawaran' => 'required',
            'dealing' => 'required',
            'tgl_dealing' =>'required',
            'posisi_pks' => 'required',
            'closing' =>'required',
            'via' =>'required',
        ]);

        $kontrak = new kontrak;
        $kontrak->id_kontrak = $request->id_kontrak;
        $kontrak->kode_customer = $request->kode_customer;
        $kontrak->nama_perusahaan = $request->nama_perusahaan;
        $kontrak->periode_kontrak = $request->periode_kontrak;
        $kontrak->akhir_periode = $request->akhir_periode;
        $kontrak->srt_pemberitahuan = $request->srt_pemberitahuan;
        $kontrak->tgl_srt_pemberitahuan = $request->tgl_srt_pemberitahuan;
        $kontrak->srt_penawaran = $request->srt_penawaran;
        $kontrak->tgl_srt_penawaran = $request->tgl_srt_penawaran;
        $kontrak->dealing = $request->dealing;
        $kontrak->tgl_dealing = $request->tgl_dealing;
        $kontrak->posisi_pks = $request->posisi_pks;
        $kontrak->closing = $request->closing;
        $kontrak->via = $request->via;

        if ($kontrak->save()){
            return redirect('/insertkontrak')->with('success', 'item berhasil ditambahkan');
        }
        else{
            return redirect('/insertkontrak')->with('error', 'item gagal ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_kontrak)
    {
        //$where = array('id_kontrak' => $id_kontrak);
        $kontrak  = Kontrak::findOrFail($id_kontrak);
 
        return view('officer/editkontrak')->with('kontrak',$kontrak);
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
        $kontrak = Kontrak::findorFail($id);
        $request->validate([
            'kode_customer' => 'required',
            'nama_perusahaan' => 'required',
            'periode_kontrak' => 'required|date',
            'akhir_periode' => 'required',
            'srt_pemberitahuan' => 'required',
            'tgl_srt_pemberitahuan' => 'required',
            'srt_penawaran' =>'required',
            'tgl_srt_penawaran' => 'required',
            'dealing' => 'required',
            'tgl_dealing' =>'required',
            'posisi_pks' => 'required',
            'closing' =>'required',
            'via' =>'required',
        ]);

        $kontrak->kode_customer = $request->kode_customer;
        $kontrak->nama_perusahaan = $request->nama_perusahaan;
        $kontrak->periode_kontrak = $request->periode_kontrak;
        $kontrak->akhir_periode = $request->akhir_periode;
        $kontrak->srt_pemberitahuan = $request->srt_pemberitahuan;
        $kontrak->tgl_srt_pemberitahuan = $request->tgl_srt_pemberitahuan;
        $kontrak->srt_penawaran = $request->srt_penawaran;
        $kontrak->tgl_srt_penawaran = $request->tgl_srt_penawaran;
        $kontrak->dealing = $request->dealing;
        $kontrak->tgl_dealing = $request->tgl_dealing;
        $kontrak->posisi_pks = $request->posisi_pks;
        $kontrak->closing = $request->closing;
        $kontrak->via = $request->via;
        
        if ($kontrak->save())
          return redirect()->route('index.kontrak')->with(['success'=>'edit sukses']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_kontrak)
    {
        $kontrak = Kontrak::where('id_kontrak',$id_kontrak)->delete();
        return redirect()->route('index.kontrak')->with('success', 'delete sukses');
    }
    public function exportExcel()
	{
		return Excel::download(new KontrakExport, 'Laporan-Kontrak-CRM.xlsx');
    }
    public function akhirKontrak(){
        $akhir = DB::table('kontrak')
        ->select(DB::raw('id_kontrak','kode_customer','nama_perusahaan','periode_kontrak','akhir_periode'))
        ->where('akhir_periode', '<=', strtotime(date("H:i:s", strtotime('7 hour')))+30)
        ->get();

        return view('officer.closing', $akhir);
    }
}
