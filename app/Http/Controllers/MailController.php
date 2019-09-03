<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    /*public function show($id)
    {
        return User::findOrFail($id);
    }*/
    public function sendMail(){
        Mail::raw('Raw string email', function($msg) { 
            $msg->to(['hosting2k17@gmail.com']); 
            $msg->from(['hosting2k17@gmail.com']); });
    return "okay";
    }
}