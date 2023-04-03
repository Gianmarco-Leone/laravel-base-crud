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

     //  Con questa funzione salvo i valori inseriti nel form della rotta create
    public function store(Request $request)
    {
        $data = $request->all();

        $song = new Song();
        
        // ! METODO 1 (lungo):
        // $song->title = $data['title'];
        // $song->album = $data['album'];
        // $song->author = $data['author'];
        // $song->editor = $data['editor'];
        // $song->length = $data['length'];
        // $song->poster = $data['poster'];

        // ! METODO 2 (corto):
        // Solo se, ad ogni chiave dell'array associativo $data, corrisponde un attributo con nome uguale, posso utilizzare il metodo fill(), per utilizzarlo devo però dichiarare quali sono gli attributi $fillable all'interno del modello di riferimento
        $song->fill($data);

        $song->save();

        // ritorno il redirect alla pagina show(quella del dettaglio) per visionare il nuovo elemento aggiunto
        return redirect()->route('songs.show', $song);
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