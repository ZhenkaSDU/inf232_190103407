<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function sendEmail(){
        $details = [
            'Name' => 'Zhengisbek',
            'SurName' => 'Gazezov',
        ];

        Mail::to("190103407@stu.sdu.edu.kz")->send(new TestMail($details));
        return "Email Sent";
    }
}
