<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNoteRequest;
use App\Http\Requests\UpdateNoteRequest;
use App\Http\Requests\NoteArchivedRequest;
use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
   //endpoint to get all notes order by created date and paginated
    public function index()
    {
        return Note::orderBy('created_at', 'asc')->paginate(10);
    }

    //endpoint to store a new note
    public function store(StoreNoteRequest $request)
    {
        $note = Note::create($request->validated());
        return response()->json($note, 201);
    }

    //endpoint to get a note by id
    public function show( Note $note)
    {
        return response()->json($note, 200);
    }

    //endpoint to update a note by id
    public function update(UpdateNoteRequest $request, Note $note)
    {
        $note->update($request->validated());
        return response()->json($note, 200);
    }

    //endpoint to delete a note by id
    public function destroy(Note $note)
    {
         $note->delete();
         return response()->json(['message' => 'Note deleted successfully'], 200);
    }

    //endpoint to archive a note by id
    public function archive(Note $note)
    {
        if($note->is_archived){
            return response()->json(['message' => 'Note already archived'], 200);
        }

        $note->update(['is_archived' => true]);

        return response()->json(['message' => 'Note archived successfully'], 200);
    }

    //endpoint to get all archived notes paginated
    public function archived(NoteArchivedRequest $request)
    {
        $archivedNotes = Note::where('is_archived', true)->paginate(10);

        return response()->json($archivedNotes, 200);
    }

}