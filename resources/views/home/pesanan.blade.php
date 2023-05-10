<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Musico</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="{{asset('assets/image/x-icon')}}" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/audioplayer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <x-header-layout />

    <!-- footer start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-md-12">
                        <div class="footer_widget">
                            <h3 class="footer_title text-center mt-5">
                                FORM PEMESANAN TIKET
                            </h3>
                            <div class="subscribe-from text-center">
                                <div class="card" style="background-color: transparent; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                    <div class="card-body">
                                       {!! Form::open(['route' => 'service.pesanan', 'method' => 'POST']) !!}
                                            {!! Form::text('name', null, ['class' => 'mt-4', 'placeholder' => 'Enter Your Name']) !!}
                                            {!! Form::text('email', null, ['class' => 'mt-4', 'placeholder' => 'Enter Your Email']) !!}
                                            {!! Form::number('phone', null, ['class' => 'mt-4', 'placeholder' => 'Enter Your Phone']) !!}
                                            {!! Form::text('address', null, ['class' => 'mt-4', 'placeholder' => 'Enter Your address']) !!}

                                            {!! Form::select('konser_id', $konser, null, ['class' => 'form-control d-flex mt-5', 'style' => 'background-color:transparent; width  :750px; justify-content:center;align-item:center;margin:auto;border-top:none;border-left:none;border-right:none;']) !!}
                                            @if($errors->has('konser_id'))
                                            <span class="text-danger">{{ $errors->first('konser') }}</span>
                                            @endif

                                            {!! Form::number('quantity', null, ['class' => 'mt-4', 'placeholder' => 'Enter Your quantity']) !!}
                                            @if($errors->has('quantity'))
                                            <span class="text-danger">{{ $errors->first('quantity') }}</span>
                                            @endif

                                            {!! Form::submit("CREATE PESANAN", ['class' => 'boxed-btn3 p-2 mt-5']) !!}
                                       {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                            <p class="sub_text">Esteem spirit temper too say adieus who direct esteem esteems luckily.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->













































</body>
<!-- JS here -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/ajax-form.js') }}"></script>
<script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/audioplayer.js') }}"></script>
<script src="{{ asset('assets/js/scrollIt.js') }}"></script>
<script src="{{ asset('assets/js/jquery.scrollUp.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.slicknav.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/gijgo.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<!--contact js-->
<script src="{{ asset('assets/js/contact.js') }}"></script>
<script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.form.js') }}"></script>
<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/js/mail-script.js') }}"></script>

<script src="{{ asset('assets/js/main.js') }}"></script>

<script>
    $(function () {
        $('audio').audioPlayer({

        });
    });

</script>
</body>

</html>
