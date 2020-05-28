@extends('layouts.app')

@section('content')
    <div class="container mt-4">
    <h2>支援履歴</h2>
        <hr>   
        <div class="box-check">
            <div class="box-check-in">
            
                    @for($i = 0; $i < count($histry_rewards);$i++)
                <table class="check_table" border="1">
                    <tr>
                        <th>ライブハウス名</th>
                        <td>{{$histry_projects[1]->livehouse_name}}</td>
                    </tr>
                    
                    <tr>
                        <th>リターン内容</th>
                        <td>{{$histry_rewards[$i]->reward_content}}</td>
                    </tr>
                    <tr>
                        <th>支援金額</th>
                        <td>{{$histry_rewards[$i]->reward_price}} × {{$histry_orders[$i]->quantity}} = @php echo($histry_rewards[$i]->reward_price*$histry_orders[$i]->quantity); @endphp 円</td>
                    </tr>
                    
                    @endfor
                   
                </table>
                
                <div class="button">
                    <a href="/home" class="back_link">ホームに戻る</a>
                </div>
            </div>
        </div>
    </div>
@endsection