<?php

namespace App\Http\Controllers;

use App\Models\Tache;
use App\Models\Activite;
use App\Models\Equipement;
use Illuminate\Http\Request;
use App\Http\Requests\TacheRequest;

class TacheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $taches=Tache::all();
        return view('Tache.index')->with([
            'taches'=>$taches
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Equipement=Equipement::all();
        return view('Tache.create',compact('Equipement'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TacheRequest $request)
    {
        $tache=new Tache();
        $tache->description=$request->description;
        $tache->date=$request->Date;
        $tache->duree=$request->Duree;
        $tache->equipement_id=$request->equipement_id;
        $tache->save();
        return redirect()->route('Tache.index')->with([
            'success'=>'Tache added seccessuflly'
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
        $Taches=Tache::find($id);
        $Activites = Activite::where('tache_id',$id)->get();
        $Equipement = Equipement::where('id',$Taches->equipement_id)->get();
        return view('Tache.show',compact('Taches','Equipement'))->with([
            'Activites'=>$Activites,
           
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
        $Tache=Tache::find($id);
        $Equipement=Equipement::all();
        return view('Tache.update',compact('Tache','Equipement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TacheRequest $request, $id)
    {
        $tache=new Tache();
        $tache->description=$request->description;
        $tache->date=$request->Date;
        $tache->duree=$request->Duree;
        $tache->equipement_id=$request->equipement_id;
        $tache->save();
        return redirect()->route('Tache.index')->with([
            'success'=>'Tache added seccessuflly'
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
        $tache=Tache::find($id);
        $tache->destroy($id);
        return redirect()->route('Tache.index')->with([
            'success'=>'Tache supprimer'
        ]);
    }
}
