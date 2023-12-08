<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Http\Requests\NoteRequest;
use Illuminate\Http\JsonResponse;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():JsonResponse
    {
        $notes = Note::all();
        return response()->json($notes, 200);
    }

    // create no es necesaria, porque no vamso a  retornar ninguna vista

    /**
     * Show the form for creating a new resource.
     */
    public function store(NoteRequest $request):JsonResponse
    {
        $note = Note::create($request->all());
        return response()->json([
            'success' => true,
            'data' => $note
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):JsonResponse
    {
        $note = Note::find($id);
        return response()->json($note, 200);
    }

    // edit no es necesaria, porque no vamso a  retornar ninguna vista

    /**
     * Update the specified resource in storage.
     */
    public function update(NoteRequest $request, string $id):JsonResponse
    {
        $note = Note::find($id);
        $note->update($request->all());

        return response()->json([
            'success' => true,
            'data' => $note
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):JsonResponse
    {
        Note::find($id)->delete();
        return response()->json([
            'success' => true
        ], 200);
    }
}
