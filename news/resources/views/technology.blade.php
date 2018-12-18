@extends('layouts.app')

@section('title')
    NewsAssist
@endsection

@section('content')
    <section>
        <div id="secwrapper">
            <div class="technology"></div>
        </div>
    </section>
    <div id="webchat">
        <script src="https://storage.googleapis.com/mrbot-cdn/webchat-0.4.2.js"></script>
        <script>
            WebChat.default.init({
                selector: "#webchat",
                initPayload: "/greet",
                interval: 500,
                socketUrl: "http://localhost:5002/",
                title: "NewsChatbot",
                subtitle: "",
                profileAvatar: "https://rasa.com/assets/img/demo/sara_avatar.png",
                showCloseButton: true,
                fullScreenMode: false,
            })
        </script>
    </div>
@endsection
