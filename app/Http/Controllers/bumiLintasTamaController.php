<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class bumiLintasTamaController extends Controller
{
    public function index() {
        $count = DB::table('registrasis')
            ->where('id_sbu', '=', 4)
            ->count();
        $kampus = DB::table('registrasis')
            ->select('registrasis.*')
            ->where('id_jenis', '=', 1)
            ->where('id_sbu', '=', 4)
            ->count();
        $hire = DB::table('registrasis')
            ->select('registrasis.*')
            ->where('id_jenis', '=', 2)
            ->where('id_sbu', '=', 4)
            ->count();
        $sekolah = DB::table('registrasis')
            ->select('registrasis.*')
            ->where('id_jenis', '=', 3)
            ->where('id_sbu', '=', 4)
            ->count();
        $aktif = DB::table('registrasis')
            ->select('registrasis.*')
            ->where([
                ['end_date', '>=', date('Y-m-d')],
                ['startdate', '<=', date('Y-m-d')]
            ])
            ->where('id_sbu', '=', 4)
            ->count();
        $nonaktif = DB::table('registrasis')
            ->select('registrasis.*')
            ->where([
                ['end_date', '<', date('Y-m-d')]])
                ->where('id_sbu', '=', 4)
            ->count();
        if(Auth::check()){
            return view('dashboard.bumiLintasTama', compact('count', 'kampus', 'hire', 'sekolah', 'aktif', 'nonaktif'));
        }
        return redirect('/login');
    }
}
