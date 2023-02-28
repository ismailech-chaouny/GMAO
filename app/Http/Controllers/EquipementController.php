<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Categorie;
use App\Models\Equipement;
use Illuminate\Http\Request;
use App\Http\Requests\EquipementRequest;

class EquipementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equi=Equipement::all();
        return view('Equipement.index')->with([
            'Equipement'=>$equi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Categorie::all();
        $services=Service::all();
        return view('Equipement.create',compact('categories','services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EquipementRequest $request)
    {
        if($request->has('document')){
            $file=$request->document;
            $document_name=time().''.$file->getClientOriginalName();
            $file->move(storage_path('app/public/uploads'),$document_name);
        }
        if($request->has('image')){
            $file=$request->image;
            $image_name=time().''.$file->getClientOriginalName();
            $file->move(storage_path('app/public/uploads'),$image_name);
        }
        $equip=new Equipement();
        $equip->image=$image_name;
        $equip->designation=$request->Designation;
        $equip->description=$request->Description;
        $equip->categorie_id=$request->Categorie_id;
        $equip->service_id=$request->Service_id;
        $equip->date_debut=$request->DateDebut;
        $equip->prix=$request->Prix;
        $equip->marque=$request->Marque;
        $equip->reference=$request->Reference;
        $equip->document=$document_name;
        $equip->pieceRechanger=$request->PieceRechanger;
        $equip-> save();
        return redirect()->route('Equipement.index')->with([
            'success'=>'Equipement added seccessuflly'
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
        $Equipement = Equipement::find($id);
        return view('Equipement.show',compact('Equipement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories=Categorie::all();
        $services=Service::all();
        $equipement=Equipement::find($id);
        return view('Equipement.update',compact('equipement','categories','services'));
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
        
        $equip=Equipement::find($id);
        if($request->has('image')){
            $file=$request->image;
            $image_name=time().''.$file->getClientOriginalName();
            $file->move(storage_path('app/public/uploads'),$image_name);
            if(file_exists(storage_path('app/public/uploads/') . $equip->image)){
                unlink(storage_path('/app/public/uploads/') . $equip->image);
                $equip->image=$image_name;
               }
            
        }
        if($request->has('document')){
            $file=$request->document;
            $document_name=time().''.$file->getClientOriginalName();
            $file->move(storage_path('app/public/uploads'),$document_name);
            if(file_exists(storage_path('app/public/uploads/') . $equip->document)){
                unlink(storage_path('app/public/uploads/') . $equip->document);
                $equip->document=$document_name;
               }
        }
        $equip->image;
        $equip->designation=$request->Designation;
        $equip->description=$request->Description;
        $equip->categorie_id=$request->Categorie_id;
        $equip->service_id=$request->Service_id;
        $equip->date_debut=$request->DateDebut;
        $equip->prix=$request->Prix;
        $equip->marque=$request->Marque;
        $equip->reference=$request->Reference;
        $equip->document;
        $equip->pieceRechanger=$request->pieceRechanger;
        $equip->update();
        return redirect()->route('Equipement.show' , $equip->id)->with([
            'success'=>'Equipement modifier'
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
        $equip=Equipement::find($id);
        if(file_exists(storage_path('app/public/uploads/') . $equip->document)){
            unlink(storage_path('app/public/uploads/') . $equip->document);
        }
        if(file_exists(storage_path('app/public/uploads/') . $equip->image)){
            unlink(storage_path('app/public/uploads/') . $equip->image);
        }
        $equip->destroy($id);
        return redirect()->route('Equipement.index')->with([
            'success'=>'Equipement supprimer'
        ]);
    }
}
