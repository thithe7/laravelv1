<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;


class siswactrl extends Controller
{


    public function listsiswa()
    {
        $siswa=DB::table('siswa')
            ->get();

        return view('listsiswa',compact('siswa'));
    }


    public function insertview()
    {

        return view('insertview');
    }


    public function editview($id)
    {

        $siswa=DB::table('siswa')
            ->where('id','=',$id)
            ->first();

        return view('editview',compact('siswa'));
    }

    public function delete($id)
    {

        $deletesiswa=DB::table('siswa')
            ->where('id', '=', $id)
            ->delete();


        if($deletesiswa){
            return redirect('listsiswa');
        }
        else{
            echo "gagal";
        }
    }


    public function insert(Request $request)
    {

        $nama=$request->get('nama');
        $alamat=$request->get('alamat');
        $telpon=$request->get('telpon');

        $insertsiswa=DB::table('siswa')->insert(
                        [
                        'nama' => $nama,
                        'alamat' => $alamat,
                        'telpon' => $telpon
                        ]
                        );


        if($insertsiswa){
            return redirect('listsiswa');
        }
        else{
            echo "gagal";
        }
    }


    public function edit(Request $request)
    {

        $id=$request->get('id');
        $nama=$request->get('nama');
        $alamat=$request->get('alamat');
        $telpon=$request->get('telpon');

        $editsiswa=DB::table('siswa')
            ->where('id', $id)
            ->update([
                'nama' => $nama,
                'alamat' => $alamat,
                'telpon' => $telpon
                ]);


        if($editsiswa){
            return redirect('listsiswa');
        }
        else{
            echo "gagal";
        }
    }







}
