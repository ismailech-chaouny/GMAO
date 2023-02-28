<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use App\Models\Equipement;
use App\Models\Etablissement;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services=Service::all();
        return view('Service.index')->with([
            'services'=>$services,
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $etabls=Etablissement::all();
        return view('Service.create')->with([
            'etablissements'=>$etabls
        ]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceRequest $request)
    {
        $service=new Service();
        $service->nom_service=$request->nom_service;
        $service->etablissement_id=$request->etablissement_id;
        $service-> save();
        return redirect()->route('Service.index')->with([
            'success'=>'Service added seccessuflly'
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
        $service=Service::find($id);
        $equipement = Equipement::where('service_id',$id)->get();
        $Equipement = Equipement::all();
        return view('Service.show',compact('service'))->with([
            'Equipement'=>$equipement,
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
        $etablissements=Etablissement::all();
        $service=Service::find($id);
        return view('Service.update',compact('service','etablissements'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceRequest $request, $id)
    {
        $service=Service::find($id);
        $service->nom_service=$request->nom_service;
        $service->etablissement_id=$request->etablissement_id;
        $service->update();
        return redirect()->route('Service.index')->with([
            'success'=>'Service modifier'
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
        $service=Service::find($id);
        $service->destroy($id);
        return redirect()->route('Service.index')->with([
            'success'=>'Service supprimer'
        ]);
    }
}
