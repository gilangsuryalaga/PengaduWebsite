<?php

namespace App\Http\Controllers;
use PDF;
use Illuminate\Http\Request;

class AdminController extends Controller
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
        $tanggapan = \DB::table('tanggapan')
                    ->join('pengaduan','pengaduan.id_pengaduan', '=' , 'tanggapan.id_pengaduan')
                    ->join('petugas','petugas.id_petugas', '=' , 'tanggapan.id_petugas')
                    ->get();

        return view('homeadmin', ['tanggapan' => $tanggapan]);
    
    }

    public function downloadPDF(Request $request, $id){
                $tanggap['tanggap'] = \App\Tanggapan::find($id);
                
                $pdf = PDF::loadView('pdf', $tanggap);
                return $pdf->download('invoice.pdf');
    }
}
