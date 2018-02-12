<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateValoracionRequest;
use App\Valoracion;


class ValoracionController extends Controller
{

    public function store(CreateValoracionRequest $request){

        Valoracion::create([
            'valora_user_id'  => $request->input('valora_user_id'),
            'valorado_user_id'  => $request->input('valorado_user_id'),
            'valoracion'  => $request->input('valoracion')
        ]);

        return back();
        return redirect()->back();
    }

}