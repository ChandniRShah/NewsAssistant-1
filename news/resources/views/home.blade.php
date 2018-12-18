@extends('layouts.app')

@section('title')
    NewsAssist
@endsection

@section('content')
    <div id="secwrapper">
        <section>
            <div class="news"></div>
        </section>
    </div>

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

    <div>
        <script>
            //            if (window.WebSocket === undefined) {
            //                state.innerHTML = "sockets not supported";
            //                state.className = "fail";
            //            }else {
            //                if (typeof String.prototype.startsWith != "function") {
            //                    String.prototype.startsWith = function (str) {
            //                        return this.indexOf(str) == 0;
            //                    };
            //                }
            //
            //                window.addEventListener("load", onLoad, false);
            //            }
            //
            //            function onLoad() {
            //                var wsUri = "http://localhost:5002/";
            //                websocket = new WebSocket(wsUri);
            //
            //            }
            var socket = new WebSocket('http://localhost:5002/');

            socket.onopen = function(event) {
                console.log("Connection established");
            }



        </script>
    </div>
@endsection
