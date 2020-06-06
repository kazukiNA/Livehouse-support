@extends('layouts.orner')

@section('content')
    <div class="container mt-5">
        <div class="title02">
            <h2>お返しをしましょう</h2>
            <hr>
        </div>
        <form action="{{url('/orner/confirm/'.$project->id)}}" method="post">
            {{ csrf_field() }}
            <div class="form-group clearfix">
                <div class="reward-number">
                    <h5>リターン1</h5>
                </div> 
                <label for="reward1_price" class="form-heading">{{ __('金額') }}</label>
                <div class="form-body">
                    <input id="reward1_price" type="number" class="form-control" name="reward1_price" value="{{ old('reward1_price') }}" placeholder="(例) 3000" autocomplete="off">　円
                    @if($errors->has('reward1_price'))
                        <div class="error">
                            <p class="error_message">※{{ $errors->first('reward1_price') }}</p>
                        </div>
                    @endif
                </div>
            </div>
            <div class="form-group reward-group clearfix">
                <label for="reward1_content" class="form-heading">{{ __('内容') }}</label>
                <div class="form-body">
                    <textarea id="reward1_content" type="text" class="reward-form content_text" name="reward1_content" value="{{ old('reward1_content') }}" placeholder="リターンの内容とそのリターンについたの概要を書いてみましょう。&#13;&#10;(例) タオル&#13;&#10;3000円を支援していただいた方には弊ライブハウスオリジナルのタオルを差し上げます。収束後にそのタオルとともに、ライブをお楽しみください。" autocomplete="off"></textarea>
                    @if($errors->has('reward1_content'))
                        <div class="error">
                            <p class="error_message">※{{ $errors->first('reward1_content') }}</p>
                        </div>
                    @endif
                </div>
            </div>          

            <div id="reward2">
            <div class="form-group clearfix">  
                <div class="reward-number">
                    <h5>リターン2</h5>
                </div>       
                <label for="reward2_price" class="form-heading">{{ __('金額') }}</label>
                <div class="form-body">
                    <input id="reward2_price" type="number" class="form-control" name="reward2_price" value="{{ old('reward2_price') }}"   autocomplete="off">　円
                    @if($errors->has('reward2_price'))
                        <div class="error">
                            <p class="error_message">※{{ $errors->first('reward2_price') }}</p>
                        </div>
                    @endif</div>
            </div>
            <div class="form-group  reward-group clearfix">
                <label for="reward2_content" class="form-heading">{{ __('内容') }}</label>
                <div class="form-body">
                    <textarea id="rewar2_content" type="text" class="content_text fl" name="reward2_content" value="{{ old('reward2_content') }}" autocomplete="off"></textarea>
                    @if($errors->has('reward2_content'))
                        <div class="error">
                            <p class="error_message">※{{ $errors->first('reward2_content') }}</p>
                        </div>
                    @endif
                </div>
            </div>
            </div>    

            <div id="reward3">
            <div class="form-group">
                <div class="reward-number">
                    <h5>リターン3</h5>
                </div> 
                <label for="reward2_price" class="form-heading">{{ __('金額') }}</label>
                <div class="form-body">
                    <input id="reward2_price" type="number" class="form-control " name="reward3_price" value="{{ old('reward3_price') }}"  autocomplete="off">　円
                    @if($errors->has('reward3_price'))
                        <div class="error">
                            <p class="error_message">※{{ $errors->first('reward3_price') }}</p>
                        </div>
                    @endif
                </div>
            </div>
            <div class="form-group reward-group">
                <label for="reward3_content" class="form-heading">{{ __('内容') }}</label>
                <div class="form-body">
                    <textarea id="reward3_content" type="text" class="content_text" name="reward3_content" value="{{ old('reward3_content') }}" autocomplete="off"></textarea>
                    @if($errors->has('reward3_content'))
                        <div class="error">
                            <p class="error_message">※{{ $errors->first('reward3_content') }}</p>
                        </div>
                    @endif
                </div>
            </div>  
            </div>
            <div class="add_reward" id="on" style="text-align:center">
                <div class="button">
                    <input class="button_link more-reward" type="button" value="さらにリターンを追加する" onclick="document.getElementById('reward2').style.display='block';document.getElementById('on').style.display='none';document.getElementById('in').style.display='block';">
                </div> 
            </div>
            <div class="add_reward" id="in" style="text-align:center">
                <div class="button">
                    <input class="button_link more-reward" type="button" value="さらにリターンを追加する" onclick="document.getElementById('reward3').style.display='block';document.getElementById('in').style.display='none';">
                </div> 
            </div> 
            <div class="no_add"  style="text-align:center">
                <div class="button">
                    <input class="button_link confirm-link" type="submit" value="確認画面に進む">
                </div>
            </div>
        </form>
    </div>
@endsection