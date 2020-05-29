@extends('layouts.top')

@section('content')
    <div class="container mt-5">
        <h1>Our Live</h1>
        
        <div class="welcome-box">
            <p class="welcome-description">Our Liveは、コロナウイルスにより被害を受けたライブハウス支援するクラウドファンディング型のサービスです。<br>思い入れのあるライブハウスを支援しましょう。</p>
        </div>
        <div class="welcome-button">
            <a href="/orner/login" class="button_link welcome-orner">支援を受ける</a>
            <a href="/home" class="button_link welcome-user">支援をする</a>
        </div>
    </div>
@endsection