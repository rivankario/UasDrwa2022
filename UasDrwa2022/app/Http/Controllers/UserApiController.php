<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserApiController extends Controller
{
    public function all(){
        $user = user::all();
        return response()->json([
            'success'   => true,
            'message'   => "Berhasil Ditampilkan",
            'data'      => $user
        ], 200);
    }

    public function create(Request $request)
    {
       $user = DB::table('user')->insert([
        'nama_mapel' => $request->nama_mapel,
        'deskripsi' => $request->deskripsi
       ]);

       if($user)
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
       $user = DB::whereId($request->id_mapel)->update([
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

