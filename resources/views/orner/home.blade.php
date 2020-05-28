@extends('layouts.orner')

@section('content')
<div class="container">
    <div class="title03">
        <h2>管理画面</h2>
        <hr>
    </div>
        <div class="box-check">
            <div class="box-header">
                @if(!empty($created))
                <p class="home-title">基本情報</p>
                <div class="action_link">　
                    <a href='edit/project/{{$created->id}}' class="btn btn-primary btn-sm">編集</a>
                </div>
            </div>
                    <table class="check_table" border="1">
                        <tr>
                            <th class="confirm-heading">ライブハウス名</th>
                            <td class="confirm-content">{{$created->livehouse_name}}</td>
                        </tr>
                        <tr>
                            <th class="confirm-heading">目標金額</th>
                            <td class="confirm-content">{{$created->target_amount}} 円 </td>
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
                    </table>
                    
                        @for($i=0; $i < count($created_rewards);$i++)
                        <div class="box-header">
                            <p class="home-title">リターン情報</p>
                            <div class="action_link">　
                                <a href='edit/reward/{{$created_rewards[$i]->id}}' class="btn btn-primary btn-sm">編集</a>
                                <form method="post" action="/orner/delete/reward/{{$created_rewards[$i]->id}}">
                                    {{ csrf_field()}}
                                    <input type="submit" value="削除"　class="btn btn-primary btn-sm" onclick='return confirm("削除しますか？");'>
                                </form>
                            </div>
                        </div>
                        <table class="check_table" border="1">
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
                            <a href="/orner/create" class="button_link">新規作成</a>
                        </div>
                    </div>
                @endif
            </div>
            
        </div>
</div>
@endsection
