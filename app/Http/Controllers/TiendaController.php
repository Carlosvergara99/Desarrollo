<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\TiendaRequest;
use App\tienda;

class TiendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tienda= tienda::OrderBy('id', 'DESC')->get();
        toastr()->info('hola!');

        return $tienda;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TiendaRequest $request)
    {
        $data= new tienda($request->all());
        $data->save();
        return response()->json('la tienda ha sido registrado con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tienda = tienda::find($id);
        return response()->json($tienda);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TiendaRequest $request, $id)
    {
        $tienda = tienda::find($id);
        $tienda->update($request->all());

        return response()->json('The Tienda successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $tienda = tienda::find($id);
         $tienda->delete();
    }
}
