<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //
    public function index(){
        $contacts = Contact::get();
        // return json response
        // return $contacts;

        // foreach($contacts as $contact){
        //     echo $contact->name. '<br/>';
        // }

        return view('contact.index',compact('contacts'));
    }

    public function store(){
        Contact::create(['name'=>'Ariba']);
        return back();
    }
}
