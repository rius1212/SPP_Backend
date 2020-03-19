<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tamu;
use Illuminate\Support\Facades\DB;

class TamuController extends Controller
{
    public function index() {
        return Tamu::all();
    }

    public function store(Request $request) {
        $tamu = new Tamu;
        $tamu->{"Nama"} = $request->nama;
        $tamu->{"Alamat"} = $request->alamat;
        $tamu->{"No HP"} = $request->noHP;
        $tamu->save();

        return response()->json([
            'success'   =>  true,
        ], 200);
    }

    public function show($id) {
        $tamu = Tamu::where('id', $id)->get();
        if (is_null($tamu)) {
            return response()->json('tamu Not Found', 404);
        } else {
            return response()->json($tamu, 200);
        }
    }

    public function update(Request $request, $id) {
        $tamu = Tamu::find($id);
        if(is_null($tamu)) {
            return response()->json('tamu Not Found', 404);
        }
        if(!is_null($request->nama)){
            $tamu["Nama"] = $request->nama;
        }
        if(!is_null($request->alamat)){
            $tamu["Alamat"] = $request->alamat;
        }
        if(!is_null($request->noHP)){
            $tamu["No HP"] = $request->noHP;
        }
       
        $success = $tamu->save();

        if(!$success){
            return response()->json('Error Updating', 500);
        }else{
            return response()->json('Success', 200);
        }
    }

    public function destroy($id) {
        $tamu = Tamu::where('id', $id)->delete();

        if(!$tamu){
            return response()->json('Error Deleting', 500);
        }else{
            return response()->json('Success', 200);
        }
    }


}
