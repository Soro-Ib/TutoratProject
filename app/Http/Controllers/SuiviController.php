<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuiviController extends Controller
{
    public function progression(){
        return view('admin.etudiants.suivi.progression');
    }
}
