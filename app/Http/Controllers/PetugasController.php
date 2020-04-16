<?php

namespace App\Http\Controllers;
use App\Pengaduan;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:petugas');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pengaduan = \DB::table('pengaduan')
                    ->join('users','users.id_masyarakat', '=' , 'pengaduan.id_masyarakat')
                    ->get();

        return view('homepetugas', ['pengaduan' => $pengaduan]);
    
    }

    public function destroy(Request $request,$id){
        $status = \DB::table('pengaduan')->where('id_pengaduan', $id)->delete();
        if ($status) {
			return redirect('/petugas')->with('success', 'Data berhasil dihapus');
		} else {
			return redirect('/login')->with('error', 'Data gagal dihapus');
		}
    }
}
