<?php

namespace App\Http\Controllers;

use App\Message\SmsMessage;
use Illuminate\Http\Request;

class SmsController extends Controller
{
    public function store(SmsMessage $smsMessage)
    {
        $smsMessage
            ->phone(request('phone'))
            ->message(\request('message'))
            ->send();

        return back();
    }
}
