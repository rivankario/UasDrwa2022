<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\JadwalGuru;

class JadwalGuruApiController extends Controller
{
    public function all(){
        $jadwalguru = jadwalguru::all();
        return response()->json([
            'success'   => true,
            'message'   => "Berhasil Ditampilkan",
            'data'      => $jadwalguru
        ], 200);
    }

    public function create(Request $request)
    {
       $jadwalguru = DB::table('jadwal_guru')->insert([
        'tahun_akademik' => $request->tahun_akademik,
        'semester' => $request->semester,
        'id_guru' => $request->id_guru,
        'hari' => $request->hari,
        'id_kelas' => $request->id_kelas,
        'id_mapel' => $request->id_mapel,
        'jam_mulai' => $request->jam_mulai,
        'jam_selesai' => $request->jam_selesai,
       ]);

       if($jadwalguru)
       {
            return response()->json([
                'success' => true,
                'message' => 'Berhasil Disimpan'
            ], 200);
       }
       
       else
       {
            return response()->json([
                'success' => false,
                'message' => 'Gagal Disimpan'
            ], 401);
       }
    }

    public function update(Request $request)
    {
        $jadwalguru = DB::table('jadwal_guru')->update([
         'tahun_akademik' => $request->tahun_akademik,
         'semester' => $request->semester,
         'id_guru' => $request->id_guru,
         'hari' => $request->hari,
         'id_kelas' => $request->id_kelas,
         'id_mapel' => $request->id_mapel,
         'jam_mulai' => $request->jam_mulai,
         'jam_selesai' => $request->jam_selesai,
        ]);
 
        if($jadwalguru)
        {
             return response()->json([
                 'success' => true,
                 'message' => 'Berhasil Disimpan'
             ], 200);
        }
        
        else
        {
             return response()->json([
                 'success' => false,
                 'message' => 'Gagal Disimpan'
             ], 401);
        }
     }

    public function delete($id_jadwal_guru) {
        $jadwalguru = jadwalguru::find($id_jadwal_guru);
        $jadwalguru->delete();

        if($jadwalguru)
        {
             return response()->json([
                 'success' => true,
                 'message' => 'Berhasil Dihapus'
             ], 200);
        }
        
        else
        {
             return response()->json([
                 'success' => false,
                 'message' => 'Gagal Dihapus'
             ], 401);
        }
    }
}



