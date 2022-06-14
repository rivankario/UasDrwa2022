<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PresensiMengajar;

class PresensiMengajarApiController extends Controller
{
    public function all(){
        $presensimengajar = presensimengajar::all();
        return response()->json([
            'success'   => true,
            'message'   => "Berhasil Ditampilkan",
            'data'      => $presensiharian
        ], 200);
    }

    public function create(Request $request)
    {
       $presensimengajar = DB::table('presensi_mengajar')->insert([
        'id_jadwal_guru' => $request->id_jadwal_guru,
        'tanggal' => $request->tanggal,
        'jam_mulai' => $request->jam_mulai,
        'jam_selesai' => $request->metode,
        'metode' => $request->metode,
        'keterangan' => $request->keterangan
       ]);

       if($mapel)
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
       $mapel = Mapel::whereId($request->id_mapel)->update([
        'nama_mapel' => $request->nama_mapel,
        'deskripsi' => $request->deskripsi,
       ]);

       if($mapel)
       {
            return response()->json([
                'success' => true,
                'message' => 'Berhasil Diubah'
            ], 200);
       }
       
       else
       {
            return response()->json([
                'success' => false,
                'message' => 'Gagal Diubah'
            ], 401);
       }
    }

    public function delete($id_mapel) {
        $mapel = mapel::find($id_mapel);
        $mapel->delete();

        if($mapel)
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



