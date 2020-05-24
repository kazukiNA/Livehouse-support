@extends('layouts.app')

@section('content')
<div class="container">
    <div class="title03">
        <h2>支援履歴</h2>
        <hr>
    </div>
        <div class="box-check">
            <div class="box-check-in">
            @foreach($histry_orders as $histry_order)
            <table class="check_table" border="1">
                        <tr>
                            <th class="confirm-heading">支援者名</th>
                            <td class="confirm-content">{{$histry_order->id}}</td>
                        </tr>
                        <tr>
                            <th class="confirm-heading">支援金額</th>
                            <td class="confirm-content">{{$histry_reward->reward_price}} × {{$histry_order->quantity}} = @php echo($histry_reward->reward_price*$histry_order->quantity);@endphp 円</td>
                        </tr>
                        <tr>
                            <th class="confirm-heading">支援日</th>
                            <td class="confirm-content">{{$histry_order->created_at}}</td>
                        </tr>
            </table>
            @endforeach
            </div>
            <div class="button">
                    <a href="/orner/home" class="back_link">管理画面に戻る</a>
                </div>
        </div>
</div>
@endsection
