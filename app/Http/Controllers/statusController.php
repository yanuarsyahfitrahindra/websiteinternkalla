<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class statusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
            $ar_status = DB::table('status')->get();
            return view('status.index', compact('ar_status'));
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
        return view('status.create');
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
        DB::table('status')->insert ([
            'status' => $request->status,
        ]);

        //2. landing page, halaman yang akan muncul ketika telah mengisi form
        return redirect('/status');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //menampilkan detail status
        $ar_status = DB::table('status')
                    ->where('id_status', '=', $id)
                    ->get();
        return view('status.show', compact('ar_status'));
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
        $data = DB::table('status')
                    ->where('id_status', '=', $id)
                    ->get();
        return view('status.create_edit', compact('data'));
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
        DB::table('status')
            ->where('id_status', '=', $id)
            ->update ([
            'nama_status' => $request->nama,
        ]);

        //2. landing page, halaman yang akan muncul ketika telah mengisi form
        return redirect('/status'.'/'.$id);
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
        DB::table('status')
            ->where('id_status',$id)
            ->delete();

        //2. landing page, halaman yang akan muncul ketika telah mengisi form
        return redirect('/status');
    }
}

