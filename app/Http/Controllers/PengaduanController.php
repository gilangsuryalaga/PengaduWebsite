<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pelayanan(){
        return view ('pelayanan');

    }
    public function storepelayanan(Request $request){
        $rule =[
            'tgl_pengaduan' => 'required',
            'laporan' => 'required|min:6',
            'foto' => 'required',
        ];

        $this->validate($request, $rule);

        $input = $request->all();

        $pengadu = new \App\Pengaduan;
        $pengadu->tgl_pengaduan = $input['tgl_pengaduan'];
        $pengadu->id_masyarakat = $input['id_masyarakat'];
        $pengadu->laporan = $input['laporan'];
        $pengadu->kategori = $input['kategori'];
        $pengadu->foto = $input['foto'];
        $pengadu->status = $input['status'];
        $status = $pengadu->save();

        if ($status) {
 		    return redirect('/home')->with('success', 'Data berhasil ditambahkan');
 	    } else {
 		    return redirect ('/pelayanan')->with('error', 'Data gagal ditambahkan');
 	    }
    }

    public function transportasi(){
        return view ('transportasi');
    }
    public function storetransportasi(){
        $rule =[
            'tgl_pengaduan' => 'required',
            'laporan' => 'required|min:6',
            'foto' => 'required',
        ];

        $this->validate($request, $rule);

        $input = $request->all();

        $pengadu = new \App\Pengaduan;
        $pengadu->tgl_pengaduan = $input['tgl_pengaduan'];
        $pengadu->id_masyarakat = $input['id_masyarakat'];
        $pengadu->laporan = $input['laporan'];
        $pengadu->kategori = $input['kategori'];
        $pengadu->foto = $input['foto'];
        $pengadu->status = $input['status'];
        $status = $pengadu->save();

    if ($status) {
 		return redirect('/home')->with('success', 'Data berhasil ditambahkan');
 	} else {
 		return redirect ('/pelayanan')->with('error', 'Data gagal ditambahkan');
    }
     
    }
    public function bencana(){
        return view ('bencana');
    }
    public function storebecana(){
        $rule =[
            'tgl_pengaduan' => 'required',
            'laporan' => 'required|min:6',
            'foto' => 'required',
        ];
        // |image|mimes:jpeg,png,jpg,gif,svg|max:2048
        // $this->validate($request, $rule);
        // if ($files = $request->file('foro')) {
        //    $destinationPath = 'public/image/'; // upload path
        //    $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
        //    $files->move($destinationPath, $profileImage);
           
        $input = $request->all();

        $pengadu = new \App\Pengaduan;
        $pengadu->tgl_pengaduan = $input['tgl_pengaduan'];
        $pengadu->id_masyarakat = $input['id_masyarakat'];
        $pengadu->laporan = $input['laporan'];
        $pengadu->kategori = $input['kategori'];
        $pengadu->foto = $input['foto'];
        $pengadu->status = $input['status'];
        $status = $pengadu->save();

        if ($status) {
 		    return redirect('/home')->with('success', 'Data berhasil ditambahkan');
 	    } else {
 		    return redirect ('/pelayanan')->with('error', 'Data gagal ditambahkan');
 	    }
    }
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
    public function store(Request $request)
    {
        //
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
    
}
