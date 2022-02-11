<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class sbuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
            $ar_sbu = DB::table('sbus')->get();
            return view('sbu.index', compact('ar_sbu'));
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
        return view('sbu.create');
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
        DB::table('sbus')->insert ([
            'nama_sbu' => $request->nama,
        ]);

        //2. landing page, halaman yang akan muncul ketika telah mengisi form
        return redirect('/sbu');
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
        $ar_sbu = DB::table('sbus')
                    ->where('id_sbu', '=', $id)
                    ->get();
        return view('sbu.show', compact('ar_sbu'));
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
        $data = DB::table('sbus')
                    ->where('id_sbu', '=', $id)
                    ->get();
        return view('sbu.create_edit', compact('data'));
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
        DB::table('sbus')
            ->where('id_sbu', '=', $id)
            ->update ([
            'nama_sbu' => $request->nama,
        ]);

        //2. landing page, halaman yang akan muncul ketika telah mengisi form
        return redirect('/sbu'.'/'.$id);
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
        DB::table('sbus')
            ->where('id_sbu',$id)
            ->delete();

        //2. landing page, halaman yang akan muncul ketika telah mengisi form
        return redirect('/sbu');
    }
}
