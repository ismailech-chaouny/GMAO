<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\Etablissement;
use App\Http\Requests\AllRequest;

class EtablissementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etabls=Etablissement::all();
        return view('Etablissement.index')->with([
            'etablissements'=>$etabls
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Etablissement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AllRequest $request)
    {
        $etabl=new Etablissement();
        $etabl->raison_social=$request->raison_social;
        $etabl->adresse=$request->adresse;
        $etabl->telephone=$request->telephone;
        $etabl->responsable=$request->responsable;
        $etabl-> save();
        return redirect()->route('Etablissement.index')->with([
            'success'=>'Etablissement added seccessuflly'
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
        $Etablissement=Etablissement::find($id);
        $Services = Service::where('etablissement_id',$id)->get();
        return view('Etablissement.show',compact('Etablissement'))->with([
            'Services'=>$Services
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $etabl=Etablissement::find($id);
        return view('Etablissement.update',compact('etabl'));
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
        $etabl=Etablissement::find($id);
        $etabl->raison_social=$request->raison_social;
        $etabl->adresse=$request->adresse;
        $etabl->telephone=$request->telephone;
        $etabl->responsable=$request->responsable;
        $etabl->update(); 
        return redirect()->route('Etablissement.index')->with([
            'success'=>'Etablissement modifier'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $etabl=Etablissement::find($id);
        $etabl->destroy($id);
        return redirect()->route('Etablissement.index')->with([
            'success'=>'Etablissement supprimer'
        ]);
    }
}
