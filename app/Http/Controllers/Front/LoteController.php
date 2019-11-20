<?php

namespace App\Http\Controllers\Front;

use App\Lote;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoteController extends Controller
{

    public function index(Request $request)
    {

        $id_lote = $request->id;

        $leilao = new Lote();
        $listarLeilao = $leilao->listarCadastro($id_lote);

        return view('front/lote', ['leilao' => $listarLeilao]);
    }
}
