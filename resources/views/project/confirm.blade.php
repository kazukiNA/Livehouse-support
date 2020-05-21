@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="title03">
            <h2>確認画面</h2>
            <hr>
        </div>
        <div class="box-check">
            <div class="box-check-in">
                <table class="check_table" border="1">
                    <tr>
                        <th class="confirm-heading">ライブハウス名</th>
                        <td class="confirm-content">{{$project->livehouse_name}}</td>
                    </tr>
                    <tr>
                        <th class="confirm-heading">目標金額</th>
                        <td class="confirm-content">{{$project->target_amount}}</td>
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
                    @foreach($rewards as $reward)
                    <tr>
                        <th class="confirm-heading">リターン金額</th>
                        <td class="confirm-content">{{$reward->price}}</td>
                    </tr>
                    <tr>
                        <th class="confirm-heading">リターン内容</th>
                        <td class="confirm-content">{{$reward->content}} 円</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection