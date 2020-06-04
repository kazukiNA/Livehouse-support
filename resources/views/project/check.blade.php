@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>内容をご確認ください</h2>
        <hr> 
        <form action="{{url('done')}}" method="post"> 
                    {{ csrf_field()}}  
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
                        <td class="check_content">{!! nl2br($rewards[$i]->reward_content) !!}</td>
                    </tr>
                    <tr>
                        <th>支援金額</th>
                        <td>{{$rewards[$i]->reward_price}} × {{$orders[$i]}} = @php echo($rewards[$i]->reward_price*$orders[$i]); @endphp 円</td>
                    </tr>
                    @php
                    $sum += $rewards[$i]->reward_price*$orders[$i];
                    @endphp
                    <input type="hidden" name="reward_id[{{$i}}]" value="{{$rewards[$i]->id}}">  
                    @endfor
                   
                </table>
                <div class="sum_money">
                    <span>合計決済金額</span><strong class="number2">{{$sum}}円</strong>
                </div>
            </div>
        </div>
                <div class="button">
                    <input type="hidden" value="{{$project}}">
                    
                    <input class="button_link" type="submit" value="支援する">
                </div>
            </form>
    </div> 
@endsection