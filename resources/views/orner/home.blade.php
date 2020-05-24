@extends('layouts.app')

@section('content')
<div class="container">
    <div class="title03">
        <h2>管理画面</h2>
        <hr>
    </div>
        <div class="box-check">
            <div class="box-check-in">
                @if(!empty($created))
                    <table class="check_table" border="1">
                        <tr>
                            <th class="confirm-heading">ライブハウス名</th>
                            <td class="confirm-content">{{$created->livehouse_name}}</td>
                        </tr>
                        <tr>
                            <th class="confirm-heading">目標金額</th>
                            <td class="confirm-content">{{$created->target_amount}} 円</td>
                        </tr>
                        <tr>
                            <th class="confirm-heading">支援終了日</th>
                            <td class="confirm-content">{{$created->apprication_end}}</td>
                        </tr>
                        <tr>
                            <th class="confirm-heading">タイトル</th>
                            <td class="confirm-content">{{$created->title}}</td>
                        </tr>
                        <tr>
                            <th class="confirm-heading">概要文</th>
                            <td class="confirm-content">{{$created->description}}</td>
                        </tr>
                        
                        @for($i=0; $i < count($created_rewards);$i++)
                        <tr>
                            <th class="confirm-heading">リターン金額</th>
                            <td class="confirm-content">{{$created_rewards[$i]->reward_price}} 円</td>
                        </tr>
                        <tr>
                            <th class="confirm-heading">リターン内容</th>
                            <td class="confirm-content">{{$created_rewards[$i]->reward_content}}</td>
                        </tr>
                        @php $reward_id=$created_rewards[$i]->id; @endphp
                        
                            <th class="confirm-heading">支援者数</th>
                            <td class="confirm-content">{{$support_count[$i]}} 人　[<a href="{{url('orner/histry/'.$reward_id)}}">詳細</a>]</td>
                        </tr>
                        @endfor
                    </table>
                @else
                    <div class="no-project">
                        <p>まだ受ける支援内容を作成していません。</p>
                        <div class="button">
                            <a href="/create" class="button_link">新規作成</a>
                        </div>
                    </div>
                @endif
            </div>
            
        </div>
</div>
@endsection
