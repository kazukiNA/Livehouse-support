@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>内容をご確認ください</h2>
        <hr>   
        <div class="box-check">
            <div class="box-check-in">
                <table class="check_table" border="1">
                    <tr>
                        <th>ライブハウス名</th>
                        <td>{{$project->livehouse_name}}</td>
                    </tr>
                    @php $sum =0; @endphp
                    @for($i = 0; $i <count($rewards);$i++)
                    <tr>
                        <th>リターン内容</th>
                        <td class="check_content">{{$rewards[$i]->reward_content}}</td>
                    </tr>
                    <tr>
                        <th>支援金額</th>
                        <td>{{$rewards[$i]->reward_price}} × {{$orders[$i]->quantity}} = @php echo($rewards[$i]->reward_price*$orders[$i]->quantity); @endphp 円</td>
                    </tr>
                    @php
                    $sum += $rewards[$i]->reward_price*$orders[$i]->quantity;
                    @endphp
                    @endfor
                   
                </table>
                <div class="sum_money">
                    <span>合計決済金額</span><strong class="number2">{{$sum}}円</strong>
                </div>
            </div>
        </div>
        

        <div class="content">
            
                <form class="settlement" action="{{ asset('charge') }}" method="POST">
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