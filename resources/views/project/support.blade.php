@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>{{ $project->livehouse_name }}</h1>
        <hr> 
        <form action="{{url('/check/'.$project->id)}}" method="post">
            {{ csrf_field() }}  
        <div class="row detail">
            <div class="col-md-8 message">
                <div class="message_title">
                    {{$project->title}}
                </div>
                <hr id="title_under">
                <div class="message_description">
                    {{$project->description}}
                </div>
            </div>
            <div class="col-md-4 overview2">
                <div class="overview2_goal">
                    <h3>目標金額</h3>
                    <strong class="number1">{{$project->target_amount}}</strong><small class="unit">円</small>
                </div>
                <div class="overview2_per">
                    <h3>募集終了まで残り</h3>
                    <strong class="number1">{{(strtotime($project->apprication_end)-$today)/(60 * 60 * 24)}}</strong><small class="unit">日</small>
                </div>
                <input id="{project}" type="hidden" name="{project}">
            </div>
        </div>
        
        <div class="return_head">
           <h2>リターンを選ぶ</h2> 
        </div>
        <hr class="border_line">
        @if($errors->has('selected_id'))
            <div class="error error_order">
                <p class="error_message">※{{ $errors->first('selected_id') }}</p>
            </div>
        @endif
        @foreach($rewards as $reward)
        <div class="box-return">
            <div class="box-in-return">
                <div class="box-return-price">
                    <input id="return_check" name="selected_id[]" type="checkbox" value={{$reward->id}}>
                    
                    <label for="return_check">
                    <strong class="number2">{{$reward->reward_price}}円</strong>
                    </label>
                    <div class="box_quantity">
                    <select id="return_quantity" name="quantity_{{$reward->id}}">
                        @for($i=1;$i<21;$i++)
                        <option value="{{$i}}">{{$i}}</option>
                        @endfor
                    </select>
                    <span>個</span>
                    </div>
                </div>
                <hr class="return_border">
                <div class="box-return-content">
                    {!! nl2br($reward->reward_content) !!}
                </div>
            </div>
        </div>
        @endforeach
        <div class="button">
            <input class="button_link" type="submit" value="次に進む">
            </input>
        </div>
    </div> 
@endsection