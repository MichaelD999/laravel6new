<?php

namespace App\Http\Controllers;

use App\Events\ProductPurchased;
use App\Notifications\PaymentReceived;
use Illuminate\Notifications\Notification;

class PaymentsController extends Controller
{
    public function create()
    {
        return view('payments.create');// resources/views/payments/create.blade.php
    }

    public function store()
    {
        ProductPurchased::dispatch('toy');
//        request()->user()->notify(new PaymentReceived(900));
    }
    //
}
