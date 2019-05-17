<?php

namespace App\Http\Controllers;

use App\Sistema;
use Illuminate\Http\Request;

class SistemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Sistema.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Sistema.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'descricao' => 'required',
            'sigla' => 'required',
            'email' => 'email',
        ]);

        Sistema::create($request->all());

        return redirect()->route('sistema.create')
            ->with('success', 'MN002 - Operação realizada com sucesso.');
    }
    /**
     * Find in Sistema Model.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function find(Request $request)
    {

        $this->validate($request, [
            'email' => 'nullable|email',
        ]);

        $results = Sistema::where('email', 'LIKE', '%' . $request->email . '%')
            ->where('descricao', 'LIKE', '%' . $request->descricao . '%')
            ->where('sigla', 'LIKE', '%' . $request->sigla . '%')->get();

        return view('Sistema.find', ['results' => $results]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
