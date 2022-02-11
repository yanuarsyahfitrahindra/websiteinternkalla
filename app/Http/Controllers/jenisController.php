<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class jenisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
            $ar_jenis = DB::table('jenis')->get();
            return view('jenis.index', compact('ar_jenis'));
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
        return view('jenis.create');
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
        DB::table('jenis')->insert ([
            'jenis_magang' => $request->jenis_magang,
        ]);

        //2. landing page, halaman yang akan muncul ketika telah mengisi form
        return redirect('/jenis');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //menampilkan detail jenis
        $ar_jenis = DB::table('jenis')
                    ->where('id_jenis', '=', $id)
                    ->get();
        return view('jenis.show', compact('ar_jenis'));
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
        $data = DB::table('jenis')
                    ->where('id_jenis', '=', $id)
                    ->get();
        return view('jenis.create_edit', compact('data'));
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
        DB::table('jenis')
            ->where('id_jenis', '=', $id)
            ->update ([
            'nama_jenis' => $request->nama,
        ]);

        //2. landing page, halaman yang akan muncul ketika telah mengisi form
        return redirect('/jenis'.'/'.$id);
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
        DB::table('jenis')
            ->where('id_jenis',$id)
            ->delete();

        //2. landing page, halaman yang akan muncul ketika telah mengisi form
        return redirect('/jenis');
    }
}

