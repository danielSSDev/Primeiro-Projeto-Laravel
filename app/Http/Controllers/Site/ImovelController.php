<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imovel;

class ImovelController extends Controller
{
    public function index($id)
    {
        $imovel = Imovel::find($id);
        return view('site.imovel', compact('imovel'));
    }
}
