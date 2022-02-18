<?php

namespace App\Http\Controllers;

use App\Models\Energeticas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EnergeticasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function mostrar(Request $request){
        $lista = DB::table('tbl_producto')->get();
        return view('mostrar', compact('lista'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Energeticas  $energeticas
     * @return \Illuminate\Http\Response
     */
    public function show(Energeticas $energeticas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Energeticas  $energeticas
     * @return \Illuminate\Http\Response
     */
    public function edit(Energeticas $energeticas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Energeticas  $energeticas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Energeticas $energeticas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Energeticas  $energeticas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Energeticas $energeticas)
    {
        //
    }
}
