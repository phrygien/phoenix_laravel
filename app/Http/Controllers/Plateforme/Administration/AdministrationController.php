<?php

namespace App\Http\Controllers\Plateforme\Administration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdministrationController extends Controller
{
    /*
    * load page gestion école
    */
    public function pageEcole()
    {
        return view('plateformes.administration.gestion_ecole.page');
    }
    /*
    * fin page gestion ecole
    */
}
