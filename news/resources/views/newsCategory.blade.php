@extends('layouts.app')

@section('title')
    NewsAssist
@endsection

@section('content')
    <div id="secwrapper">
        <section>
            <article>
                <a href="{{ route('sports') }}"><img src="{{ asset('/img/sports.png') }}" alt=""/></a>
                <h1>Sports</h1>
                <!-- <a href="#" class="readmore">See more</a> -->
            </article>

            <article>
                <a href="{{ route('entertainment') }}"><img src="{{ asset('/img/entertainment.png') }}" alt=""/></a>
                <h1>Entertainment</h1>
                <!-- <p>Mauris sed lectus dui. Suspendisse enim elit, tempor ac ullamcorper et, eleifend quis sem. Sed euismod sagittis ligula, a imperdiet sapien molestie nec. Curabitur ut eros a justo fermentum vulputate ac sit amet metus. Aenean quis dignissim diam.</p>
                <a href="#" class="readmore">See more</a> -->
            </article>

            <article>
                <a href="{{ route('technology') }}"><img src="{{ asset('/img/technology.png') }}" alt=""/></a>
                <h1>Technology</h1>
                <!-- <p>Mauris sed lectus dui. Suspendisse enim elit, tempor ac ullamcorper et, eleifend quis sem. Sed euismod sagittis ligula, a imperdiet sapien molestie nec. Curabitur ut eros a justo fermentum vulputate ac sit amet metus. Aenean quis dignissim diam.</p>
                <a href="#" class="readmore">See more</a> -->
            </article>

            <article>

                <a href="{{ route('fashion') }}"><img src="{{ asset('/img/fashion.png') }}" alt=""/></a>
                <h1>Fashion</h1>
                <!-- <p>Mauris sed lectus dui. Suspendisse enim elit, tempor ac ullamcorper et, eleifend quis sem. Sed euismod sagittis ligula, a imperdiet sapien molestie nec. Curabitur ut eros a justo fermentum vulputate ac sit amet metus. Aenean quis dignissim diam.</p>
                <a href="#" class="readmore">See more</a> -->
            </article>
        </section>
    </div>
@endsection
