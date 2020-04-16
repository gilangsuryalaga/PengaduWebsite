<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TanggapanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:petugas');
    }

    public function create (Request $request, $id){
        // $tanggapan = \DB::table('pengaduan')->find($id);
        $pengaduan['pengadu'] = \App\Pengaduan::find($id);
                    // ->join('tanggapan','tanggapan.id_pengaduan', '=' , 'pengaduan.id_pengaduan')
                    // ->where('id_pengaduan', $id)
                    // ->get();

        return view ('tanggapan',$pengaduan);
    }
    public function store (Request $request,$id){
        $rule = [
            'tanggapan' => 'required',
            'status' => 'required'
        ];
        $this->validate($request, $rule);

      //  $change = $request->all();
        $input = $request->all();

        $reply = new \App\Tanggapan;
    //    $pengaduan = \App\Pengaduan::find($id);
        
        $reply->id_pengaduan = $input['id_pengaduan'];
        $reply->tgl_pengaduan = $input['tgl_pengaduan'];
        $reply->tanggapan = $input['tanggapan'];
        $reply->id_petugas = $input['id_petugas'];
        $status = $reply->save();

        // $pengaduan->status = $change["proses"];
        // $edit = $pengaduan->update();

    if ($status) {
 		return redirect('/petugas')->with('success', 'Data berhasil ditambahkan');
 	} else {
 		return Redirect::back();
 	}
    }
}
