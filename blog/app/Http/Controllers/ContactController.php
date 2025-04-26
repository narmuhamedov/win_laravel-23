<?php
namespace App\Http\Controllers;
use App\Http\Requests\ContactRequest;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(ContactRequest $reg){

        // $validation = $reg->validate([
        //     'subject'=> 'required|min:5|max:50',
        //     'message'=>'required|min:15|max:500'

        // ]);



        return "All Okey";
    }
}
