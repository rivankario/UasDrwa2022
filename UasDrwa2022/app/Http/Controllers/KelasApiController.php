<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasApiController extends Controller
{
    public function all(){
        $kelas = Kelas::all();
        return response()->json([
            'success'   => true,
            'message'   => "Berhasil Ditampilkan",
            'data'      => $kelas
        ], 200);
    }

    public function create(Request $request)
    {
        $kelas = DB::table('kelas')->insert([
        'kelas' => $request->kelas,
        'jurusan' => $request->jurusan,
        'sub' => $request->sub
       ]);

       if($kelas)
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
       $kelas = Kelas::whereId($request->id_kelas)->update([
        'kelas' => $request->kelas,
        'jurusan' => $request->jurusan,
        'sub' => $request->sub
       ]);

       if($kelas)
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

    public function delete($id_kelas) {
        $kelas = Kelas::find($id_kelas);
        $kelas->delete();

        if($kelas)
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
