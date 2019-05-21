<?php

namespace App\Http\Controllers;

use App\Teste;
use Illuminate\Http\Request;

class TesteController extends Controller
{
    function teste(Request $request){
        $data = $request->all();
        $teste = Teste::find($data['id']);
        $teste->update($data);

        dd('Weslei vacilao');
    }
}
