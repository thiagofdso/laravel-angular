<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Http\Requests;
use App\models\Contato;
class ContatoController extends Controller
{
    /**
     * Send back all comments as JSON
     *
     * @return Response
     */
    public function index()
    {
        return Response::json(Contato::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        Contato::create(array(
            'nome' => $request->input('nome'),
            'telefone' => $request->input('telefone')
        ));

        return Response::json(array('success' => true));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
            Contato::destroy($id);

        return Response::json(array('success' => true));
    }
}
