@extends('layouts.app')

@section('title','Project')

@section('content')
    <div class="container mt-4 ">
        <h1>支援するライブハウスを探す</h1>
        <hr>
        @foreach ($projects as $project)
        <div class="liveproject">
                <div class="boxes">
                    <div class="box">
                        <div class="box-in">
                            <a class="Link" href="/support/{{$project->id}}"></a>
                            <div class="box-livehouse">
                                <a title="{{$project->livehouse_name}}" href="/support/{{$project->id}}">
                                    <h2>{{$project->livehouse_name}}</h2> 
                                </a>
                            </div>
                            <div class="box-title">
                                <p>{{$project->title}}</p> 
                            </div>
                            <div class="overview1">
                                <div class="goal">
                                    <small>目標金額</small>
                                    {{$project->target_amount}}
                                    <small>円</small>
                                </div>
                                <div class="per">
                                    <small>募集終了まであと</small>
                                    {{(strtotime($project->apprication_end)-$today)/(60 * 60 * 24)}}
                                    <small>日</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        @endforeach
    </div>
@endsection