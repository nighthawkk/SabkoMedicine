<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

use App\Donate;


use Validator;




class donatecontroller extends Controller
{
    public function donate()
    {
        $data = Input::all();

        Donate::create([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'medicine' => $data['medicine'],
            'usage' => $data['usage'],
            'quantity' => $data['quantity'],
            'address' => $data['address'],
            'ngo' => $data['ngo'],


        ]);

        $user = Auth::user();

        \Mail::send('emails.contact',
            array('name'=> Input::get('name'),'address'=> Input::get('address'),'medicine'=> Input::get('medicine'),'quantity'=> Input::get('quantity'),'usage'=> Input::get('usage'),'ngo'=> Input::get('ngo'), 'email' => $user->email, 'phone' => $user->phone ), function($donate)
            {
                $donate->from('aman.1413012@kiet.edu','Sabko Medicine');
                $donate->to('sabkomedicine@gmail.com', 'Admin')->subject('Sabkomedicine Donation');
            });

        \Mail::send('emails.contact_user',
            array('name'=> Input::get('name'),'address'=> Input::get('address'),'medicine'=> Input::get('medicine'),'quantity'=> Input::get('quantity'),'usage'=> Input::get('usage'),'ngo'=> Input::get('ngo'),'user' => $user), function($m) use ($user)
            {
                $m->from('aman.1413012@kiet.edu','Sabko Medicine');
                $m->to( $user->email ,$user->name)->subject('Sabkomedicine Donation');
            });



        return \Illuminate\Support\Facades\View::make('/donate')->withSuccess('Everything went great');



    }
}
