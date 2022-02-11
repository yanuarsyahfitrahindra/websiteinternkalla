<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class instansiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
            $ar_instansi = DB::table('instansis')->get();
            return view('instansi.index', compact('ar_instansi'));
        }
        return view('admin.adminlogin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //mengarahkan ke form input
        return view('instansi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //proses input data ke database
        //1. tangkap request dari form input data
        DB::table('instansis')->insert ([
            'nama_instansi' => $request->nama,
        ]);

        //2. landing page, halaman yang akan muncul ketika telah mengisi form
        return redirect('/instansi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //menampilkan detail instansi
        $ar_instansi = DB::table('instansis')
                    ->where('id_instansi', '=', $id)
                    ->get();
        return view('instansi.show', compact('ar_instansi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //diarahkan ke halaman form edit data
        $data = DB::table('instansis')
                    ->where('id_instansi', '=', $id)
                    ->get();
        return view('instansi.create_edit', compact('data'));
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
        //proses ubah/edit data
        DB::table('instansis')
            ->where('id_instansi', '=', $id)
            ->update ([
            'nama_instansi' => $request->nama,
        ]);

        //2. landing page, halaman yang akan muncul ketika telah mengisi form
        return redirect('/instansi'.'/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //untuk menghapus data
        DB::table('instansis')
            ->where('id_instansi',$id)
            ->delete();

        //2. landing page, halaman yang akan muncul ketika telah mengisi form
        return redirect('/instansi');
    }
}
