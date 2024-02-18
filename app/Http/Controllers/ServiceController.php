<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceModel;
use Illuminate\Support\Facades\Validator;
use App\Models\Testimoni;

class ServiceController extends Controller
{
    public function index(){
        $service = ServiceModel::all();
        $testimoni = Testimoni::all();
        return view('template/index', compact('service','testimoni'));
    }

    public function store(Request $request){
        $aturan = 
        [
            'for_name' => 'required',
            'for_umur' => 'required',
            'for_saran' => 'required',
        ];

        $messages =  
        [
             'required' => 'Wajin diisi',
        
        ];

        $validator = Validator::make($request->all(), $aturan, $messages);

       try {
        if($validator->fails()){
            return redirect()
            ->route('view-index')
            ->withErrors($validator)->withInput();
        }else{
            $insert = Testimoni::create([
                'nama' => $request -> for_name,
                'umur' => $request -> for_umur,
                'saran' => $request -> for_saran,
            ]);
    
            if($insert) {
                return redirect()->route('view-index')
                ->with('success', 'berhasil simpan testimoni');
            }
        }
        }catch (\Throwable $th) 
        { 
            return redirect()
            ->route('view-index')
            ->with('danger', $th->getMessage());
        }


    }
}

