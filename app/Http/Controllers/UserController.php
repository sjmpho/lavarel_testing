<?php

namespace App\Http\Controllers;

use App\Models\NoteModel;
use App\Models\User;
use App\Utils\Utility;
use Illuminate\Http\Request;
use Laravel\Prompts\Note;

class UserController extends Controller
{
    //

    public function Register(Request $request)
    {

        $incommingFields = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

       $user =  User::create($incommingFields);

        auth()->login($user);//in phph we use -> to access elements in a class

        return $this->getData();
    }

    public function Login(Request $request){
        //this is when a user
       // echo "this works";
        try {
            auth()->attempt(['email' => $request->email, 'password' => $request->password]);//attemptd
            session()->forget('globalNotes');

            //  to login a user
           // auth()->login(auth()->user());
           return $this->getData();
        }catch (\Exception $e){
            echo $e->getMessage();
        }

        return  null;
    }


    public function LoginOut()
    {
        auth()->logout();
        return redirect('/toMain');

    }
    public function SaveNote(Request $request)
    {
        $incommingFields = $request->validate([
            'message' => 'required',
            'title' => 'required',

        ]);
        $notemodel = new NoteModel();
        $notemodel->title =  $incommingFields['title'];
        $notemodel->content = $incommingFields['message'];
        $notemodel->user_id = "1";

        Utility::addToGLobalNotes($notemodel);


        return redirect('/toHome')->with('success', 'Note saved!');
    }
    public function getData()
    {
        // Insert if the table is empty (optional, for testing)


            $notes = new NoteModel();
            $notes->title = 'Note 1';
            $notes->content = 'Note 1 Content';
            $notes->user_id = 1;

        $notes = new NoteModel();
        $notes->title = 'Note 2';
        $notes->content = 'Note 2 Content';
        $notes->user_id = 1;

        $notes = new NoteModel();
        $notes->title = 'Note 3';
        $notes->content = 'Note 3 Content';
        $notes->user_id = 1;

            Utility::setGlobalNotes($notes);
        return view('true-home');
    }


}
