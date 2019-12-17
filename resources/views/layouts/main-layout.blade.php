
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>..:: @yield('title') - Trish Academy  ::..</title>
    <link media="all" href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link media="all" href="{{ asset('css/main.css') }}" rel="stylesheet">
    @yield('css')
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css" integrity="sha384-i1LQnF23gykqWXg6jxC2ZbCbUMxyw5gLZY6UiUS98LYV5unm8GWmfkIS6jqJfb4E" crossorigin="anonymous">
{{--    <link rel="stylesheet" href="{{ asset('fonts/stylesheet.css') }}" type="text/css" charset="utf-8" />--}}

{{--    <style type="text/css">--}}
{{--        body{--}}
{{--            font-family: 'circular_spotify_tx_tlight';--}}
{{--        }--}}
{{--    </style>--}}
</head>
<body class="no-pad">
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
<div id="wrapper">
    @guest
    <header id="header" >
        @else
            <header id="header" class="loggedin-header">
        @endguest
        <div class="header-holder">
            <div class="logo">
                <a href="/"><img src="{{ asset('images/logo.png') }}" width="150" height="62" alt="Trish Academy"></a>
            </div>
            <a href="#" class="nav-opener"><span></span></a>

            <!-- Authentication Links -->

                <div class="nav-holder">
                    <nav id="nav">

                        @yield('menu')

                    </nav>

                    @guest
                    <div class="btns-box">
                        <div class="btn-wrap">
                            <a class="login" href="{{ route('login') }}">{{ __('Login') }}</a> / <a class="register" href="{{ __('register') }}">{{ __('Register') }}</a>
                        </div>
                        <a class="btn" href="#marker">Become A Marker</a>
                    </div>


                </div>


                                @else

                @include('profile-menu')



                                @endguest

        </div>
    </header>

    @yield('content')




    <footer id="footer">
        <div class="footer-holder">
            <span class="copyright">© 2019 <a href="#">Trish Academy</a>, Inc. All rights reserved.</span>
            <span>UI/UX by <a href="https://www.arotec.io/" target="_blank">arotec</a> | Developed by Trish Technologies</span>
            <ul class="socialnetwroks">
                <li>social media</li>
                <li><a href="#"><img src="images/facebook.png" width="60" height="60" alt="facebook"></a></li>
                <li><a href="#"><img src="images/instagram.png" width="60" height="60" alt="instagram"></a></li>
                <li><a href="#"><img src="images/twitter.png" width="60" height="60" alt="twitter"></a></li>
            </ul>
        </div>
    </footer>
</div>
<!-- Modal -->
<div class="modal fade banner-video" id="banner-video" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <video width="100%" height="100%" controls>
                    <source src="video/banner-video.mp4" type="video/mp4">
                    <source src="video/banner-video.ogg" type="video/ogg">
                </video>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" defer></script>
<script>window.jQuery || document.write('<script src="{{ asset('js/jquery-3.3.1.min.js') }}" defer><\/script>')</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<script src="{{ asset('js/jquery.main.js') }}" defer></script>


<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-one-page-nav/3.0.0/jquery.nav.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    AOS.init();
    $('.singlePageNav').onePageNav();

    $(".hamburger").click(function() {
        $(".nav-container").slideToggle();
    });

    $('.render-tooltip').tooltip();



</script>
<script type="text/javascript">


    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });


    $(".nsubmit").click(function(e){

        e.preventDefault();

        let email = $("input[name=email]").val();

        // console.log(email)
        // alert(email);

        $.ajax({
            type:'POST',
            //url:'/newsletter',
            url:"{{ route('newsletter') }}",
            // data:{ email:email},
            data: {
                "_token": "{{ csrf_token() }}",
                "email": email
            },

            success:function(data){

                $('#postg').html(data.success);
                $('#post').html("");
            },

            error: function (jqXHR, textStatus, errorThrown) {
                let msg = '';
                if (jqXHR.status == 500) {
                    //console.log(jqXHR);
                    //$('#post').html('Internal error: ' + jqXHR.responseJSON.message);
                    $('#post').html('Internal error: Contact already exists');
                    $('#postg').html("");
                    //alert('request failed :'+errorThrown);
                } else if (jqXHR.status != 500){
                    //console.log(jqXHR);
                    $('#post').html('Unexpected error, refresh the browser and try again later.');
                    $('#postg').html("");
                    //alert('request failed :'+errorThrown);
                }else {
                    $('#post').html('Uncaught Error.\n' + jqXHR.responseJSON.message);
                    $('#postg').html("");
                }
            },



        });

    });
    $(".csubmit").click(function(e){

        e.preventDefault();

        let fname = $("input[name=fname]").val();
        let lname = $("input[name=lname]").val();
        let email = $("input[name=email]").val();
        let phone = $("input[name=phone]").val();
        let subject = $("input[name=subject]").val();
        let message = $("input[name=message]").val();

         console.log(lname);
        console.log(email);
        console.log(phone);
        console.log(fname);



        // alert(email);

        $.ajax({
            type:'POST',
            //url:'/newsletter',
            url:"{{ route('contact') }}",
            // data:{ email:email},
            data: {
                "_token": "{{ csrf_token() }}",
                "fname": fname,
                "lname": lname,
                "email": email,
                "phone": phone,
                "subject": subject,
                "message": message
            },

            success:function(data){

                $('#saveg').html(data.success);
                $('#save').html("");
            },

            error: function (jqXHR, textStatus, errorThrown) {
                let msg = '';
                if (jqXHR.status == 500) {
                    console.log(jqXHR);
                    //$('#post').html('Internal error: ' + jqXHR.responseJSON.message);
                    $('#save').html('Internal error: Contact already exists');
                    $('#saveg').html("");
                    //alert('request failed :'+errorThrown);
                } else if (jqXHR.status != 500){
                    //console.log(jqXHR);
                    $('#save').html('Unexpected error, refresh the browser and try again later.');
                    $('#saveg').html("");
                    //alert('request failed :'+errorThrown);
                }else {
                    $('#save').html('Uncaught Error.\n' + jqXHR.responseJSON.message);
                    $('#saveg').html("");
                }
            },



        });

    });


</script>
@yield('js')
</body>
</html>
