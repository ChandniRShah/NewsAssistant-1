@extends('layouts.app')

@section('title')
    NewsAssist
@endsection

@section('content')
    <section>
        <div id="secwrapper">
            <articleCategories>
                <a href="{{ route('sports') }}"><img src="{{ asset('/img/sports.png') }}" alt=""/></a>
                <h1>Sports</h1>
                <!-- <a href="#" class="readmore">See more</a> -->
            </articleCategories>

            <articleCategories>
                <a href="{{ route('entertainment') }}"><img src="{{ asset('/img/entertainment.png') }}" alt=""/></a>
                <h1>Entertainment</h1>
                <!-- <p>Mauris sed lectus dui. Suspendisse enim elit, tempor ac ullamcorper et, eleifend quis sem. Sed euismod sagittis ligula, a imperdiet sapien molestie nec. Curabitur ut eros a justo fermentum vulputate ac sit amet metus. Aenean quis dignissim diam.</p>
                <a href="#" class="readmore">See more</a> -->
            </articleCategories>

            <articleCategories>
                <a href="{{ route('technology') }}"><img src="{{ asset('/img/technology.png') }}" alt=""/></a>
                <h1>Technology</h1>
                <!-- <p>Mauris sed lectus dui. Suspendisse enim elit, tempor ac ullamcorper et, eleifend quis sem. Sed euismod sagittis ligula, a imperdiet sapien molestie nec. Curabitur ut eros a justo fermentum vulputate ac sit amet metus. Aenean quis dignissim diam.</p>
                <a href="#" class="readmore">See more</a> -->
            </articleCategories>

            <articleCategories>
                <a href="{{ route('fashion') }}"><img src="{{ asset('/img/fashion.png') }}" alt=""/></a>
                <h1>Fashion</h1>
                <!-- <p>Mauris sed lectus dui. Suspendisse enim elit, tempor ac ullamcorper et, eleifend quis sem. Sed euismod sagittis ligula, a imperdiet sapien molestie nec. Curabitur ut eros a justo fermentum vulputate ac sit amet metus. Aenean quis dignissim diam.</p>
                <a href="#" class="readmore">See more</a> -->
            </articleCategories>
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
