<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Utils\Utility;
use Illuminate\Http\Request;

class UIController extends Controller
{


    //so this must alter the changes to the UI
    public function ChangeLoginForm()
    {

        $showElement = false;
        // or true based on your logic
        return view('home', compact('showElement'));
    }
    public function ChangeRegForm(){


        $showElement = true;
        return view('home', compact('showElement'));
    }
    public function CreateNote(){

        return view('createNote');
    }

public function ClearNotes()
{
    session()->forget('globalNotes');
    return redirect("/toHome");
}
public function openNote($id)
{
   session()->push('globalNotes', $id);

   $note = Utility::getANote($id);

}




}
