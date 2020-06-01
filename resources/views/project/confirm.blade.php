@extends('layouts.orner')

@section('content')
    <div class="container mt-5">
        <div class="title03">
            <h2>確認画面</h2>
            <hr>
        </div>
        <div class="box-check">
            <div class="box-check-in">
                <table class="confirm-table" border="1">
                    <tr>
                        <th class="confirm-heading">ライブハウス名</th>
                        <td class="confirm-content">{{$project->livehouse_name}}</td>
                    </tr>
                    <tr>
                        <th class="confirm-heading">目標金額</th>
                        <td class="confirm-content">{{$project->target_amount}}円</td>
                    </tr>
                    <tr>
                        <th class="confirm-heading">支援終了日</th>
                        <td class="confirm-content">{{$project->apprication_end}}</td>
                    </tr>
                    <tr>
                        <th class="confirm-heading">タイトル</th>
                        <td class="confirm-content">{{$project->title}}</td>
                    </tr>
                    <tr>
                        <th class="confirm-heading">概要文</th>
                        <td class="confirm-content">{{$project->description}}</td>
                    </tr>
                </table>
                @for($i=0; $i < count($rewards); $i++)
                <div class="reward-number">
                    <h5>リターン{{$i+1}}</h5>
                </div>
                <table class="confirm-table" border="1">
                    <tr>
                        <th class="confirm-heading">金額</th>
                        <td class="confirm-content">{{$rewards[$i]->reward_price}}円</td>
                    </tr>
                    <tr>
                        <th class="confirm-heading">内容</th>
                        <td class="confirm-content">{{$rewards[$i]->reward_content}}</td>
                    </tr>
                </table>
                @endfor
                
            </div>
            <form action="{{url('/orner/save/')}}" method="post">
                {{ csrf_field()}}
                <div class="button">
                    <input type="hidden" value="{{$project}}">
                    
                    <input class="button_link" type="submit" value="登録する">
                </div>
            </form>
        </div>
    </>
@endsection