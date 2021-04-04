<?php

namespace App\Http\Controllers;

use App\Notifications\PaymentReceived;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;

class PaymentsController extends Controller
{
    public function create()
    {
        return view('payments.create');// resources/views/payments/create.blade.php
    }

    public function store()
    {
        Notification::send(request()->user(), new PaymentReceived());
    }
    //
}
