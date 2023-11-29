<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    // public function index($id = null){
    //     // return 'Hola index';
    //     return view('note.index', compact('id'));
    // }

    // CRUD
    public function index(){
        $notes = Note::all();
        return view('note.index', compact('notes'));
    }
}
