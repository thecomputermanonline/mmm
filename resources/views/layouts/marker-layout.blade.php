@extends('layouts.main-layout')



@section('title', 'Marker Portal')


@section('menu')
    <ul class="menu">
        <li class="hide"><a href="#section1" class="menu-close">hide</a></li>
        <li><a href="#main" class="menu-close">Why Mark</a></li>

        <li><a href="#how-works" class="menu-close">How It Works</a></li>
        <li><a href="#testimonials" class="menu-close">Testimonials</a></li>
        <li><a href="#faq" class="menu-close">FAQ</a></li>
        <li> <a href="https://forum.techmasters.consulting/" >Forum</a></li>

        <li class="hide"><a href="#section2" class="menu-close">hide</a></li>
    </ul>


@stop
@section('content')

    <section class="visual bg-video-holder" style="background-image: url(images/img01.jpg)" id="section1">
        <video class="bg-video" width="640" height="360" loop autoplay muted playsinline>
            <source type="video/mp4" src="./media/banner-video.mp4" />
        </video>
        <div class="holder">
            <div class="container">
                <div class="text-holder">
                    <h1>Earn money as an IELTS marker</h1>
                    <p>Learn how to read, listen, speak and write english the proper way.<br class=" d-none d-xl-block"> Write an essay, get scored and corrected by Experts online!</p>
                    <div class="btn-holder">
                        <a class="btn full" href="marker-register.html">Start marking</a>
                        <a class="btn-video" data-fancybox="true" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">Watch video</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop


