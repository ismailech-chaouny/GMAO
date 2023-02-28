<?php

namespace App\Http\Controllers;

use App\Models\Tache;
use App\Models\Etablissement;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function home()
    {
        
        $Etablissements=Etablissement::all();
        $Taches = Tache::all();
        return view('Home')->with([
            'Taches'=>$Taches,
            'Etablissements'=>$Etablissements
        ]);
      
    }
}
