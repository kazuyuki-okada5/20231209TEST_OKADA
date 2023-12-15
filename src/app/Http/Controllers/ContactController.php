<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
  public function contact()
  {
    return view('contact');
  }
      public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tell', 'address','building', 'select', 'detail']);
        return view('confirm', compact('contact'));
    }
   public function store(ContactRequest $request)
   {
     $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tell', 'address','building', 'select', 'detail']);
     Contact::create($contact);
     return view('thanks');
   }
}