<?php

namespace App\Http\Controllers;

use App\Models\Etat;
use App\Models\Tache;
use App\Models\Activite;
use App\Mail\MailMessage;
use App\Models\Technicien;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ActiviteRequest;


class ActiviteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activite=Activite::all();
        return view('Activite.index')->with([
            'Activites'=>$activite
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $techniciens=Technicien::all();
        $taches=Tache::all();
        $etats=Etat::all();
        return view('Activite.create',compact('techniciens','taches','etats'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ActiviteRequest $request)
    {
            
        $activite=new Activite();
        $activite->description=$request->description;
        $activite->date=$request->date;
        $activite->duree=$request->duree;
        $activite->technicien_id=$request->technicien_id;
        $activite->tache_id=$request->tache_id;
        $activite->etat_id=$request->etat_id;
        $activite-> save();
        if($request->checkEmail){
        $technicien= Technicien::find($activite->technicien_id);
        $activite = [
            'recipient' =>$technicien->email,
            'Descrption'=>$request->description,
            'Date'=>$request->date,
            'Duree'=>$request->duree,
            ];
            $url="http://youtube.com";
            Mail::to($activite['recipient'])->send(new MailMessage($activite,$url));
        };
        return redirect()->route('Activite.index')->with([
            'success'=>'Activite added seccessuflly',
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
        $activite=Activite::find($id);
        $techniciens=Technicien::all();
        $taches=Tache::all();
        $etats=Etat::all();
        return view('Activite.update',compact('activite','techniciens','taches','etats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActiviteRequest $request, $id)
    {
        $activite=Activite::find($id);
        $activite->description=$request->description;
        $activite->date=$request->date;
        $activite->duree=$request->duree;
        $activite->technicien_id=$request->technicien_id;
        $activite->tache_id=$request->tache_id;
        $activite->etat_id=$request->etat_id;
        $activite-> update();
        if($request->checkEmail){
        $technicien= Technicien::find($activite->technicien_id);
        $activite = [
            'recipient' =>$technicien->email,
            'Descrption'=>$request->description,
            'Date'=>$request->date,
            'Duree'=>$request->duree,
            ];
            $url="http://youtube.com";
            Mail::to($activite['recipient'])->send(new MailMessage($activite,$url));
        };
        return redirect()->route('Activite.index')->with([
            'success'=>'Activite updated seccessuflly',
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
        $activite=Activite::find($id);
        $activite->destroy($id);
        return redirect()->route('Activite.index')->with([
            'success'=>'Activite supprimer'
        ]);
    }
}
