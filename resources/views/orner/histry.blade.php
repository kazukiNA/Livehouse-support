@extends('layouts.app')

@section('content')
<div class="container">
    <div class="title03">
        <h2>支援履歴</h2>
        <hr>
    </div>
        <div class="box-check">
            <div class="box-check-in">
            @for($i = 0; $i < count($histry_orders);$i++)
            <table class="check_table" border="1">
                        <tr>
                            <th class="confirm-heading">支援者名</th>
                            <td class="confirm-content">{{$user[$i]->name}}さん</td>
                        </tr>
                        <tr>
                            <th class="confirm-heading">支援金額</th>
                            <td class="confirm-content">{{$histry_reward->reward_price}} × {{$histry_orders[$i]->quantity}} = @php echo($histry_reward->reward_price*$histry_orders[$i]->quantity);@endphp 円</td>
                        </tr>
                        <tr>
                            <th class="confirm-heading">支援日</th>
                            <td class="confirm-content">{{$histry_orders[$i]->created_at}}</td>
                        </tr>
            </table>
            @endfor
            </div>
            <div class="button orner_button">
                    <a href="/orner/home" class="back_link">管理画面に戻る</a>
                </div>
        </div>
</div>
@endsection
