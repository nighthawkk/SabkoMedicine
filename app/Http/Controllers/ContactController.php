<?php namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller {

    public function create()
    {
        return view('mail');
    }

    public function store(ContactFormRequest $request)
    {

        \Mail::send('emails.contact',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'user_message' => $request->get('message')
            ), function($message)
            {
                $message->from('aman.1413012@kiet.edu');
                $message->to('aman.1413012@kiet.edu', 'Admin')->subject('Sabkomedicine Feedback');
            });




        return \Redirect::route('contact')
            ->with('message', 'Thanks for contacting us!');

    }
}

