<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerLat1 extends Controller
{
    public function index(){
        $data["nama"]="Fauby";
        $data["asal"]="Jakarta";
        return view('latihan1', $data);
    }

    public function method2(){
        $data['title'] = 'Daftar Mahasiswa';
        $data['daf_mhs'] = array(
            array("nama" => "Fauby", "asal" => "Jakarta"),
            array("nama" => "Nadir", "asal" => "Lembang"),
            array("nama" => "Hamyus", "asal" => "Bogor")
        );
        return view('latihan2', $data);
    }
}
