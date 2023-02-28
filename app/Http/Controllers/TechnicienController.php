<?php

namespace App\Http\Controllers;

use App\Models\Specialite;
use App\Models\Technicien;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class TechnicienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $techniciens=Technicien::all();
        return view('Technicien.index')->with([
            'techniciens'=>$techniciens
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Specialite=Specialite::all();
        return view('Technicien.create')->with([
            'Specialite'=>$Specialite
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $technicien=new Technicien();
        $technicien->nom=$request->Nom;
        $technicien->prenom=$request->Prenom;
        $technicien->email=$request->Email;
        $technicien->telephone=$request->Telephone;
        $technicien->specialite_id=$request->Specialite_id;
        $technicien-> save();
        return redirect()->route('Technicien.index')->with([
            'success'=>'Technicien added seccessuflly'
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
