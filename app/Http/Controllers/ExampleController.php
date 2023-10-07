<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ExampleController extends Controller
{
    //
    public function show(){
        $all = Mahasiswa::all();
        return view('example',['data'=>$all]);
    }
    public function insert(Request $request){

        $mahasiswa = new Mahasiswa();
        $mahasiswa->NIM = $request->input('nim');
        $mahasiswa->Nama = $request->input('nama_mahasiswa');
        $mahasiswa->Prodi = $request->input('prodi_mahasiswa');
        try {
            $mahasiswa->save();
        } catch (Exception $th) {
            $_SESSION['log'] = "error";
        }
        return redirect()->route('mahasiswa');
    }
    public function delete_data($id){
        $data = Mahasiswa::find($id);
        
        if($data){
            $data->delete();
        }
        return redirect()->route('mahasiswa');
    }
}
