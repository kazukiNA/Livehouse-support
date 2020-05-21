@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="title01">
            <h2>新規サポート作成</h2>
            <hr>
        </div>
        <form action="{{url('/reward/{project}')}}" method="post">
            {{ csrf_field() }}
        <div class="form-group clearfix">
            <label for="livehouse_name" class="form-heading">{{ __('ライブハウス名') }}</label>
                <div class="form-body">
                    <input id="livehouse_name" type="text" class="form-control" name="livehouse_name" value="{{ old('livehouse_name') }}" placeholder="(例) 渋谷ABC" required autocomplete="off">
                </div>
        </div>
        <div class="form-group clearfix">
            <label for="target_amount" class="form-heading">{{ __('目標金額') }}</label>
                <div class="form-body">
                    <input id="target_amount" type="number" class="form-control" name="target_amount" value="{{ old('target_amount') }}" placeholder="(例) 1000000" required autocomplete="off">円
                </div>
        </div>
        <div class="form-group clearfix">
            <label for="email" class="form-heading">{{ __('支援終了日') }}</label>
                <div class="form-body">
                    <input id="apprication_end" type="date" class="form-control" name="apprication_end" value="{{ old('apprication_end') }}" required autocomplete="off">
                </div>
        </div>
        
        <div class="form-group clearfix">
            <label for="title" class="form-heading">{{ __('タイトル') }}</label>
                <div class="form-body">
                    <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="(例）支援よろしくお願いします！" required autocomplete="off">
                </div>
        </div>
        <div class="form-group clearfix">
            <label for="description" class="form-heading">{{ __('概要文') }}</label>
                <div class="form-body">
                    <textarea id="description" type="text" class="form-control" rows="8" name="description" value="{{ old('description') }}" placeholder="コロナウイルスで被害を受けた現状やサポートをお願いする旨、支援金をどのように充てるかなどを、少しでも多くの方に支援してもらえるように詳細に書いてみましょう。" required autocomplete="off"></textarea>
                       
                </div>
        </div>

        <div class="rewards_add">
            <div class="button">
                <input class="button_link" type="submit" value="次に進む">
                </input>
            </div>
        </div>
        </form>


    </div>
@endsection