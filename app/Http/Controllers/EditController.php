<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class EditController extends Controller
{
    //
    public function edit($id){
        try {
            $data = Mahasiswa::find($id);
            if($data){
                return view('edit',['mahasiswa' => $data]);
            }else{
                return view('edit',['mahasiswa'=>'not found']);
            }
        } catch (\Throwable $th) {
            return view('edit',['mahasiswa'=>'error in : '.$th]);
        }

    }

    public function update(Request $request, $id){
        $personal = Mahasiswa::find($id);
        if(!$personal){
            return redirect()->route('home');
        }else{
            $personal->NIM = $request->input('nim');
            $personal->Nama = $request->input('nama_mahasiswa');
            $personal->Prodi = $request->input('prodi_mahasiswa');
            $personal->save();
            return redirect()->route('mahasiswa');
        }
    }

}
