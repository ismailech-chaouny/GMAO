<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use App\Models\Equipement;
use App\Models\PieceActivite;
use Illuminate\Http\Request;

class PieceActiviteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('PieceActivite.index', ['PieceA' => PieceActivite::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Equipement=Equipement::where('pieceRechanger','1')->get();
        return view('PieceActivite.create', ['Equipement' => $Equipement, 'Activite' => Activite::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $piece=new PieceActivite();
        $piece->equipement_id=$request->equipement_id;
        $piece->activite_id=$request->activite_id;
        $piece-> save();
        return redirect()->route('PieceActivite.index')->with([
            'success'=>'Piece Activite added seccessuflly'
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
        $piece=PieceActivite::find($id);
        $piece->destroy($id);
        return redirect()->route('PieceActivite.index')->with([
            'success'=>'PieceActivite supprimer'
        ]);
    }
}
