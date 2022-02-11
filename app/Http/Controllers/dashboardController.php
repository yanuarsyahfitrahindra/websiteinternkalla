<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class dashboardController extends Controller
{
    //
    // public function __construct()
    // {
        // $this->middleware('auth');
    // }

    public function index() {
        $count = DB::table('registrasis')->count();
        $kampus = DB::table('registrasis')
            ->select('registrasis.*')
            ->where('id_jenis', '=', 1)
            ->count();
        $hire = DB::table('registrasis')
            ->select('registrasis.*')
            ->where('id_jenis', '=', 2)
            ->count();
        $sekolah = DB::table('registrasis')
            ->select('registrasis.*')
            ->where('id_jenis', '=', 3)
            ->count();
        $aktif = DB::table('registrasis')
            ->select('registrasis.*')
            ->where([
                ['end_date', '>=', date('Y-m-d')],
                ['startdate', '<=', date('Y-m-d')]
            ])
            ->count();
        $nonaktif = DB::table('registrasis')
            ->select('registrasis.*')
            ->where([
                ['end_date', '<', date('Y-m-d')]])
            ->count();
        // $aktif = DB::table('registrasis')
        //     ->select('registrasis.*')
        //     ->where('id_status', '=', 1)
        //     ->count();
        // $nonaktif = DB::table('registrasis')
        //     ->select('registrasis.*')
        //     ->where('id_status', '=', 2)
        //     ->count();
        // $kampus = DB::table('registrasis')->distinct('status')->count('Magang Kampus');
        // $hire = DB::table('registrasis')->distinct('status')->count('Magang Hire/Pribadi');
        // $sekolah = DB::table('registrasis')->distinct('status')->count('PKL/Sekolah');
        if(Auth::check()){
            return view('dashboard.index', compact('count', 'kampus', 'hire', 'sekolah', 'aktif', 'nonaktif'));
        }
        return redirect('/login');
    }

    // public function show() {
    //     $count = DB::table('registrasis')
    //             ->count();
    //     return view('dashboard.index', compact('count'));
    // }
}
