<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
class EmailController extends Controller
{
    //
    public function sendWelcomeEmail()
    {
        $title = 'Welcome to the example email';
        $body = 'Thank you for participating!';

        Mail::to('thanhduy191103@gmail.com')->send(new WelcomeMail($title, $body));

        return "Email sent successfully!";
    }
}
