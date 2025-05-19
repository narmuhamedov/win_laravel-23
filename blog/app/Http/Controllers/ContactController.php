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


    public function allData(){
        #$contact = new Contact;
        #return view('messages', ['data'=> $contact->inRandomOrder()->get()]);
        return view('message', ['data'=>Contact::all()]);
        // $contact = new Contact;
        // dd($contact->all());
    }


    public function detailMessage($id){
        $contact = new Contact;
        return view('detail-message',['data'=>$contact->find($id)]);
     }


     public function updateMessage($id){
        $contact = new Contact;
        return view('update-message', ['data'=>$contact->find($id)]);
     }
     

     public function updateMessageSubmit($id, ContactRequest $req){

        $contact =  Contact::find($id);
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');
     
        $contact->save();
     
        //Переадресация на главную страницу после изменения данных
        return redirect()->route('contact-detail-one', $id)->with('success', 'Успешно обновлено');
     
     }

     public function deleteMessage($id){
        Contact::find($id)->delete();
        return redirect()->route('contact-data')->with('success', 'Успешно удалено');
     }
     
     
}
