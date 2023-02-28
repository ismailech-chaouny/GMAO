<?php

namespace App\Http\Controllers;

use App\Models\Etat;
use Illuminate\Http\Request;

class EtatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etat=Etat::all();
        return view('Etat.index')->with([
            'etats'=>$etat
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Etat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $etat=new Etat();
        $etat->etat=$request->etat;
        $etat->color=$request->color;
        $etat-> save();
        return redirect()->route('Etat.index')->with([
            'success'=>'Etat added seccessuflly'
        ]);
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
        $etat=Etat::find($id);
        $etat->destroy($id);
        return redirect()->route('Etat.index')->with([
            'success'=>'Etat supprimer'
        ]);
    }
}
