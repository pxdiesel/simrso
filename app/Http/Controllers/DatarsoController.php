<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;



class DatarsoController extends Controller
{
     //
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
    	// mengambil data dari table 
    	$datarso = DB::table('datarso')->get();

    	// mengirim data pegawai ke view index
    	return view('datarso',['datarso' => $datarso]);

    }

    // method untuk edit data Rso
    public function edit($id)
{
	// mengambil data Rso berdasarkan id yang dipilih
	$datarso = DB::table('datarso')->where('id',$id)->get();
	// passing data Rso yang didapat ke view edit.blade.php
	return view('edit',['datarso' => $datarso]);

}
public function update(Request $request)
{
	// update data Rso
	DB::table('datarso')->where('id',$request->id)->update([
		'nama_of_rso' => $request->nama_of_rso,
		'no_of_degree' => $request->no_of_degree,
		'Issued' => $request->Issued,
        'valid' => $request->valid,
        'comment' => $request->comment
	]);
	// alihkan halaman ke halaman Rso
	return redirect('/datarso');
}
// method untuk hapus data rso
public function hapus($id)
{
	// menghapus data rso berdasarkan id yang dipilih
	DB::table('datarso')->where('id',$id)->delete();
		
	// alihkan halaman ke halaman 
	return redirect('/datarso');
}
}
