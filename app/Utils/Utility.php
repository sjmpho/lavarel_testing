<?php

namespace App\Utils;

use App\Models\NoteModel;
use PhpParser\Node\Expr\Array_;

class Utility
{
    // Static constant-like values
    public const MAX_NOTES = 100;
    public static string $title ="this is the new title  ";

    // Static method
    public static function formatNoteTitle(string $title): string
    {
        return strtoupper(trim($title));
    }

    // You can also store temporary static data
    public static array $globalNotes = [];

    public static function setGlobalNotes(NoteModel $note): void
    {
        // Get existing notes from session
        $toStore = session('globalNotes', []);

        // Add new note
        $toStore[] = $note->toArray();

        // Save updated notes back to session
        session(['globalNotes' => $toStore]);
    }
    public static function getANote(string $title): NoteModel
    {
        $toStore = session('globalNotes', []);//an array of array
        $tempNote = new NoteModel();
        foreach ($toStore as $note) {

            if($note['title'] === $title){

                return NoteModel::fromArray($note);
            }

        }



        return $tempNote;
    }
    public static function addToGLobalNotes(NoteModel $noteModel): void
    {
        $toStore = session('globalNotes', []);//we retrieve the array of array

        // Add new note
        $toStore[] = $noteModel->toArray(); //we store a new array in the array of arays;

        // Save updated notes back to session
        session(['globalNotes' => $toStore]);//we store it back into the session
    }
    public static function getGlobalNotes(): array
    {
        $rawNotes = session('globalNotes', []);//we retrieve the array of arrays.
        $noteObjects = [];

        if (empty($rawNotes)) {
            echo "no notes";
        } else {
            foreach ($rawNotes as $noteArray) {//from the array of arrays , get an array

                $noteObjects[] = NoteModel::fromArray($noteArray);
            }
        }

        return $noteObjects;
    }

}
