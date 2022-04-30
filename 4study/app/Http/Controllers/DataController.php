<?php

namespace App\Http\Controllers;

use App\Models\Sujet;
use App\Models\Comment;
use App\Models\Matiere;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDataRequest;
use App\Http\Requests\StoreCommentRequest;

class DataController extends Controller
{

    public function share()
    {
        $matiere = Matiere::all();
        // dd($matiere);
        return view('share', compact('matiere'));
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDataRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDataRequest $request)
    {
        $sujet = new Sujet();

        $validated = $request->validated();

        $sujet->name = $validated['name'];
        $sujet->sub_name = $validated['sub_name'];
        $sujet->email = $validated['email'];
        $sujet->description = $request['description'];
        $sujet->matiere_id = $request['matiere_id'];

        if ($request->hasFile('img')) {

            $file = $request->file('img');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $path = public_path('files/');
            $file->move($path,$fileName);

            $sujet->img = $fileName;
        }

        $sujet->save();
        
        return redirect('/contribuer')->with('success', 'Votre sujet est en ligne');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCommentRequest $request
     * @return \Illuminate\Http\Response
     */
    public function comment(StoreCommentRequest $request, $id)
    {
        $comment = new Comment();

        $validated = $request->validated();

        $comment->name = $validated['name'];
        $comment->email = $validated['email'];
        $comment->msg = $validated['msg'];
        $comment->sujet_id = $request['sujet_id'];
    
        $comment->save();
        
    }
}
