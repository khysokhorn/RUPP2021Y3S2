<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class FormController extends Controller
{
    public function contactSubmit(ContactRequest $request)
    {
        // Use $request object to validate record
        //$validated = $request->validate(Contact::$rules);

        // Use Validator facade
        // $validator = Validator::make($request->all(), Contact::$rules);
        // if ($validator->fails()) {
        //     return redirect(route('pages.contact'))
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }

        // 1. Save to table
        $contact = new Contact();
        $contact->to = 'admin@gmail.com';
        $contact->name = $request->get('name');
        $contact->email = $request->get('email');
        $contact->phone = $request->get('phone');
        $contact->message = $request->get('message');
        $contact->save();

        // 2. Send email

        return redirect(route('pages.contact', ['success' => 1]));
    }
}
