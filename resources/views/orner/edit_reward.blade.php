@extends('layouts.app')

@section('content')
<div class="container">
    <div class="title03">
        <h2>編集画面</h2>
        <hr>
    </div>
    <form action="" method="post">
            {{ csrf_field() }}
        <div class="form-group clearfix">
            <h3>リターン1</h3>
            <label for="reward_price" class="form-heading">{{ __('金額') }}</label>
            <div class="form-body">
                <input type="number" class="form-control" name="reward_price" value="{{$reward->reward_price}}" placeholder="(例) 3000" required autocomplete="off">円
            </div>
        </div>
        <div class="form-group clearfix">
            <label for="reward1_content" class="form-heading">{{ __('内容') }}</label>
            <div class="form-body">
                <textarea type="text" class="form-control content_text" name="reward_content" value="{{$reward->reward_content}}"  required autocomplete="off">{{$reward->reward_content}}</textarea>
            </div>
        </div>          
        <div class="rewards_add">
            <div class="button">
                <input class="button_link" type="submit" value="確認">
                </input>
            </div>
        </div>
    </form>
</div>
@endsection
