
@extends('layouts.main-layout')



@section('title', 'Student Portal')

@section('menu')
    <ul class="menu">
        <li class="hide"><a href="#section1" class="menu-close">hide</a></li>
        <li><a href="/#main" >Why us</a></li>
        <li><a href="/#tests">Tests</a></li>
        <li><a href="/#how-works" >How It Works</a></li>
        <li><a href="/#testimonials" >Testimonials</a></li>
        <li><a href="/#pricing" >Pricing</a></li>
        <li><a href="/#get-in-touch" >Contact</a></li>

        {{--        <li><a href="/forum" class="menu-close">Forum</a></li>--}}

        <li class="hide"><a href="#section2" class="menu-close">hide</a></li>
    </ul>


@stop
@section('content')

<section class="visual bg-video-holder" style="background-image: url({{ asset('images/img01.jpg' )}})" id="section1">
    <video class="bg-video" width="640" height="360" loop autoplay muted playsinline>
        <source type="video/mp4" src="./media/banner-video.mp4" />
    </video>
    <div class="holder">
        <div class="container">
            <div class="text-holder">
                <h1>Take the next IELTS essay with confidence.</h1>
                <p>Learn how to read, listen, speak and write english the proper way.<br> Write an essay, get scored and corrected by experts online!</p>
                <div class="btn-holder">
                    <a class="btn full" href="free-test.html">Take Free Test</a>
                    <a class="btn-video" data-fancybox="true" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">Watch Video</a>
                </div>
            </div>
        </div>
    </div>
</section>


@stop
