<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use App\Mail\MailMessage;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
   public function sendMail()
   {
        $activite=Activite::all();
        $url="http://youtube.com";
        Mail::to('ismailchaouni243@gmail.com')->send(new MailMessage($activite,$url));
        dd('done');
   }
}
// $request->user()