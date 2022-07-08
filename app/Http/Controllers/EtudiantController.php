<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function listeL1(){
        return view('admin.etudiants.liste.licence1');
    }
    public function listeL2(){
        return view('admin.etudiants.liste.licence2');
    }
    public function listeL3(){
        return view('admin.etudiants.liste.licence3');
    }
}
