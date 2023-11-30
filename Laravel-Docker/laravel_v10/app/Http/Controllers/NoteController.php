<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\NoteRequest;

class NoteController extends Controller
{
    // public function index($id = null){
    //     // return 'Hola index';
    //     return view('note.index', compact('id'));
    // }

    // CRUD
    public function index(): View
    {
        $notes = Note::all();
        return view('note.index', compact('notes'));
    }

    public function create(): View
    {
        return view('note.create');
    }

    public function store(Request $request): RedirectResponse
    {
        // $note = new Note;
        // $note->title = $request->title;
        // $note->content = $request->content;
        // $note->save();

        // otra manera de hacerlo es...
        // Note::create([
        //     'title' => $request->title,
        //     'content' => $request->content
        // ]);

        // validacion en el controller | Mala practica
        // deberiamso volver a copiarla en el Update
        $request->validate([
            'title' => 'required|max:255|min:3',
            'content' => 'required|max:255|min:10',
            'author' => 'required|max:25'
        ]);

        // Otra mas...
        Note::create($request->all());

        return redirect()->route('note.index')->with('success', 'Note Created');
    }

    public function edit(Note $note): View
    {
        // $note = Note::find($note); || public function edit(Note $note){
        return view('note.edit', compact('note'));
    }

    // agregando una custom request NoteRequestm en vez de agregar el codigo del store
    public function update(NoteRequest $request, Note $note): RedirectResponse
    {
        // si no usaramos el Note $note
        // $note = Note::find($note);
        // $note->title = $request->title;
        // $note->content = $request->content;
        // $note->save();

        $note->update($request->all());

        return redirect()->route('note.index')->with('success', 'Note Updates');
    }

    public function show(Note $note): View
    {
        return view('note.show', compact('note'));
    }

    public function destroy(Note $note): RedirectResponse
    {
        $note->delete();
        return redirect()->route('note.index')->with('danger', 'Note deleted');
    }
}
