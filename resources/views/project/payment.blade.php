@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>内容をご確認ください</h2>
        <hr>   

        <!--<div class="button">
            <a class="button_link" href="/contribute/{{$project->id}}">
                <div class="text">
                    <strong>次に進む</strong>
                </div>
            </a>
        </div> -->

        <div class="content">
                <form action="{{ asset('charge') }}" method="POST">
                    {{ csrf_field() }}
                            <script
                                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                    data-key="{{ env('STRIPE_KEY') }}"
                                    data-amount="1000"
                                    data-name="Stripe Demo"
                                    data-label="決済をする"
                                    data-description="Online course about integrating Stripe"
                                    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                    data-locale="auto"
                                    data-currency="JPY">
                            </script>
                </form>
            </div>
    </div> 
@endsection