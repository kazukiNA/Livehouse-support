@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1>Our Live</h1>
        
        <div class="welcome-box">
            <p class="welcome-description">Our Liveは、コロナウイルスにより被害を受けたライブハウス支援するクラウドファンディング型のサービスです。<br>思い入れのあるライブハウスを支援しましょう。</p>
        </div>
        <div class="button">
            <a href="/signin" class="button_link">支援を受ける</a>
        </div>
        <div class="button">
            <a href="/home" class="button_link">支援する</a>
        </div>
    </div>
@endsection