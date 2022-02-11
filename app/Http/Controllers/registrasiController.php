<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//tambahan
use App\Models\registrasi;
use App\Models\instansi;
use App\Models\departemen;
use App\Models\sbu;
use App\Models\jenis;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class registrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
        if(Auth::check()){
            $ar_registrasi = DB::table('registrasis')
            ->join('instansis', 'instansis.id_instansi', '=', 'registrasis.id_instansi')
            ->join('departemens', 'departemens.id_departemen', '=', 'registrasis.id_departemen')
            ->join('jenis', 'jenis.id_jenis', '=', 'registrasis.id_jenis')
            ->join('sbus', 'sbus.id_sbu', '=', 'registrasis.id_sbu')
            ->select('registrasis.*', 'instansis.nama_instansi', 'sbus.nama_sbu', 'departemens.nama_departemen', 'jenis.jenis_magang')
            ->get();
            return view('data_keseluruhan.index', compact('ar_registrasi'));
        }
        return view('admin.adminlogin');


    }

    public function hitung()
    {
        $id_registrasi   = DB::table('registrasis')->get();
        return view('dashboard.index', compact('id_registrasi'));
    }

    // public function search(Request $request)
    // {
    //     $search = $request->get('search');
    //     $ar_reg = DB::table('registrasis')
    //             ->where('nama', 'instansi', 'departemen', 'sbu', 'status', 'durasi', '%' .$search. '%')->paginate(15);
    //     return view('data_keseluruhan.index', ['ar_reg' => $ar_reg]);
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $instansi = instansi::all();
        $departemen = departemen::all();
        $sbu = sbu::all();
        $registrasi = registrasi::all();
        $jenis = jenis::all();
        return view('data_keseluruhan.create', compact('instansi', 'departemen', 'sbu', 'registrasi', 'jenis'));
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
            DB::table('registrasis')->insert ([
                'nama' => $request->registrasi[0]['nama'],
                'nohp' => $request->registrasi[0]['nohp'],
                'id_instansi' => $request->id_instansi,
                'jurusan' => $request->registrasi[0]['jurusan'],
                'id_sbu' => $request->registrasi[0]['id_sbu'],
                'id_departemen' => $request->registrasi[0]['id_departemen'],
                'id_jenis' => $request->id_jenis,
                'startdate' => $request->registrasi[0]['startdate'],
                'end_date' => $request->registrasi[0]['end_date'],
                'durasi' => $request->registrasi[0]['durasi'],
            ]);
            $n=1;
            while($n<=$request->fieldsetLength)
            {
                DB::table('registrasis')->insert ([
                    'nama' => $request->registrasi[$n]['nama'],
                    'nohp' => $request->registrasi[$n]['nohp'],
                    'id_instansi' => $request->id_instansi,
                    'jurusan' => $request->registrasi[$n]['jurusan'],
                    'id_sbu' => $request->registrasi[$n]['id_sbu'],
                    'id_departemen' => $request->registrasi[$n]['id_departemen'],
                    'id_jenis' => $request->id_jenis,
                    'startdate' => $request->registrasi[$n]['startdate'],
                    'end_date' => $request->registrasi[$n]['end_date'],
                    'durasi' => $request->registrasi[$n]['durasi'],
                ]);
                $n++;
            }

        //     //proses validasi data
        // $validasi = $request->validate(
        //     [
        //         'nama' => 'required',
        //         'nohp' => 'required|unique:registrasis|max:15',
        //         'id_instansi' => 'required',
        //         'jurusan' => 'required',
        //         'id_sbu' => 'required',
        //         'id_departemen' => 'required',
        //         'status' => 'required',
        //         'startdate' => 'required|date',
        //         'end_date' => 'required|date|after:startdate',
        //         'durasi' => 'required',
        //     ],
        //     [
        //         'nama.required' => 'Nama Wajib di Isi',
        //         'nohp.required' => 'Nomor Handphone Wajib di Isi',
        //         'nohp.unique' => 'Nomor yang anda gunakan sudah terpakai',
        //         'id_instansi.required' => 'Instansi wajib di Isi',
        //         'jurusan.required' => 'Jurusan wajib di Isi',
        //         'id_sbu.required' => 'SBU wajib di Isi',
        //         'id_departemen.required' => 'Departemen wajib di Isi',
        //         'status.required' => 'Status Magang Wajib di Isi',
        //         'startdate.required' => 'Tanggal Mulai wajib di Isi',
        //         'end_date.required' => 'Tanggal Berakhir wajib di Isi',
        //         'end_date.after:startdate' => 'Tanggal yang anda isikan salah',
        //         'durasi.required' => 'Durasi wajib diisi',
        //     ],
        // );

            //2. landing page, halaman yang akan muncul ketika telah mengisi form
            return redirect('/registrasi');
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
        $ar_registrasi = DB::table('registrasis')
            ->join('instansis', 'instansis.id_instansi', '=', 'registrasis.id_instansi')
            ->join('departemens', 'departemens.id_departemen', '=', 'registrasis.id_departemen')
            ->join('jenis', 'jenis.id_jenis', '=', 'registrasis.id_jenis')
            ->join('sbus', 'sbus.id_sbu', '=', 'registrasis.id_sbu')
            ->select('registrasis.*', 'instansis.nama_instansi', 'sbus.nama_sbu', 'departemens.nama_departemen', 'jenis.jenis_magang')
            ->where('id_registrasi', '=', $id)->get();
        return view('data_keseluruhan.show', compact('ar_registrasi'));
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
        $data = DB::table('registrasis')
                    ->where('id_registrasi', '=', $id)
                    ->get();

        $instansi = instansi::all();
        $departemen = departemen::all();
        $sbu = sbu::all();
        $registrasi = registrasi::all();
        $jenis = jenis::all();
        return view('data_keseluruhan.create_edit', compact('instansi', 'departemen', 'sbu', 'registrasi', 'jenis', 'data'));
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
        DB::table('registrasis')
            ->where('id_registrasi', '=', $id)
            ->update ([
                'nama' => $request->nama,
                'nohp' => $request->nohp,
                'id_instansi' => $request->id_instansi,
                'jurusan' => $request->jurusan,
                'id_sbu' => $request->id_sbu,
                'id_departemen' => $request->id_departemen,
                'id_jenis' => $request->id_jenis,
                'startdate' => $request->startdate,
                'end_date' => $request->end_date,
                'durasi' => $request->durasi,
        ]);

        //2. landing page, halaman yang akan muncul ketika telah mengisi form
        return redirect('/registrasi'.'/'.$id);
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
        DB::table('registrasis')
            ->where('id_registrasi',$id)
            ->delete();

        //2. landing page, halaman yang akan muncul ketika telah mengisi form
        return redirect('/registrasi');
    }
}
