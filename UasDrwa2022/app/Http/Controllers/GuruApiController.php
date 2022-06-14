<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Guru;

class GuruApiController extends Controller
{
    public function all(){
        $guru = guru::all();
        return response()->json([
            'success'   => true,
            'message'   => "Berhasil Ditampilkan",
            'data'      => $guru
        ], 200);
    }

    public function create(Request $request)
    {
       $guru = DB::table('guru')->insert([
        'rfid' => $request->rfid,
        'nip' => $request->nip,
        'nama_guru' => $request->nama_guru,
        'alamat' => $request->alamat,
        'status_guru' => $request->status_guru,
       ]);

       if($guru)
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
       $guru = Mapel::whereId($request->id_mapel)->update([
        'nama_mapel' => $request->nama_mapel,
        'deskripsi' => $request->deskripsi,
       ]);

       if($guru)
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
        $guru = mapel::find($id_mapel);
        $guru->delete();

        if($guru)
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


