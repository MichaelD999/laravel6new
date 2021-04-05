@extends('layouts.app')

@section('content')
    <div class="container">
        <ul>
            @foreach($notifications as $notification)
                <li>
                    @if ($notification->type === 'App\Notifications\PaymentReceived')
                        We have received a payment of {{ $notification->data['amount'] }}from you.
                        @endif
                </li>
            @endforeach

        </ul>
    </div>
@endsection
