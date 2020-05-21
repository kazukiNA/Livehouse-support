@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>リターンを選択してください</h1>
        <hr>   
        <div class="reward_list">
            <div class="reward_1">
                <h2>
                    <input type="checkbox">
                </h2>
            </div>
        </div>
        <div class="button">
            <a class="button_link" href="/contribution/{{$project->id}}">
                <div class="text">
                    <strong>次に進む</strong>
                </div>
            </a>
        </div>
    </div> 
@endsection