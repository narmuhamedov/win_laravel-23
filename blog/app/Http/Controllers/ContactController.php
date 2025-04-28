<?php
namespace App\Http\Controllers;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(ContactRequest $reg){

        $contact = new Contact();
        $contact -> name = $reg->input('name');
        $contact->email = $reg->input('email');
        $contact->subject = $reg->input('subject');
        $contact->message = $reg->input('message');
        $contact->save();
        return redirect()->route('home')->with('success', 'Успешно добавлено');

        // $validation = $reg->validate([
        //     'subject'=> 'required|min:5|max:50',
        //     'message'=>'required|min:15|max:500'

        // ]);
        
        

    }
}
