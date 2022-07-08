<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClasseController extends Controller
{
    public function note(){
        //Evaluation de la clsse virtuelle
        return view('admin.classesV.note');
    }
    public function programmer(){
        //Programmer une classe virtuelle
        return view('admin.classesV.programmer');
    }
    public function encours(){
        //Classes virtueles en cours
        return view('admin.classesV.encours');
    }
    public function terminer(){
        //Classes virtueles terminé
        return view('admin.classesV.terminer');
    }
}
