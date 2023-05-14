<?php

namespace App\Http\Controllers;

use App\Models\TariIndonesia;
use Illuminate\Http\Request;
use App\Http\Requests\TariIndonesiaRequest;

class TariIndonesiaController extends Controller
{
    public function index(){
        $TariIndonesia = TariIndonesia::get();
        return view('index', compact('TariIndonesia'));
    }

    public function tambah(){
        return view('tambah');
    }

    public function edit($id){
        $TariIndonesia =TariIndonesia::where('id',$id)->first();
        return view('edit', compact('TariIndonesia'));
    }

    public function lihat($id){
        $TariIndonesia =TariIndonesia::where('id',$id)->first();
        return view('lihat', compact('TariIndonesia'));
    }


    public function store (TariIndonesiaRequest $request)
    {
        $TariIndonesia = new TariIndonesia();

        $TariIndonesia->nama_tari = $request->nama_tari;
        $TariIndonesia->asal_daerah = $request->asal_daerah;

        $TariIndonesia->save();

        return redirect('/');
    }
    public function update (TariIndonesiaRequest $request, $id)
    {
        $TariIndonesia =TariIndonesia::where('id',$id)->first();

        $TariIndonesia->nama_tari = $request->nama_tari;
        $TariIndonesia->asal_daerah = $request->asal_daerah;

        $TariIndonesia->update();

        return redirect('/');   
    }
    public function hapus ($id)
    {
        $TariIndonesia =TariIndonesia::where('id',$id)->first();

        $TariIndonesia->delete();

        return redirect('/');
    }
}
