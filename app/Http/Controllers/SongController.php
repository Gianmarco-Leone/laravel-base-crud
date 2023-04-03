<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Song;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  Con questa funzione recupero le songs presenti nel database e le passo al file che si occupa del layout
    public function index(Request $request)
    {
        // Se nel form ricerca è presente qualcosa
        if($request->has('term')) {
            $term = $request->get('term');
            // Prendi dal DB i risultati in funzione del termine passato
            $songs = Song::where('title', 'LIKE', "%$term%")->paginate(10)->withQueryString();
            
            // Altrimenti recupera tutti i risultati
        } else {
            $songs = Song::paginate(10);
        }
        
        return view('songs.index', compact('songs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     //  Con questa funzione ritorno la vista del layout dove è presente il form per aggiungere un nuovo elemento al DB
    public function create()
    {
        return view('songs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //  Con questa funzione ritorno il dettaglio della singola song passando come parametro l'intero oggetto Song
    public function show(Song $song)
    {
        return view('songs.show', compact('song'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}