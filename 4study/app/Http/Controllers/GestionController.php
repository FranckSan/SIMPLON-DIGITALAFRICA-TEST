<?php

namespace App\Http\Controllers;

use App\Models\Matiere;
use App\Models\Sujet;
use Illuminate\Http\Request;

class GestionController extends Controller
{
    public function contribuer()
    {
        $sujet = Sujet::all();
        $matiere = Matiere::all();
        // dd($matiere[0]->sujets);
        return view('contribution', compact('sujet', 'matiere'));
    }

    public function details($id)
    {
        $sujet = Sujet::findOrFail($id);
        // dd($sujet);
        return view('details', compact('sujet'));
    }
    
    public function share()
    {
        return view('share');
    }
}
