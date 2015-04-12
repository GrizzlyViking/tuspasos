<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Reflexology Andover">
    <meta name="keywords" content="Reflexology, Andover, Wilton, Hand Reflexology, facial reflexology, reflexology lymph drainage, what is reflexology, foot reflexology, reflexology hampshire, reflexology Andover, reflexology Wilton">
    <meta name="author" content="Natalia Schlossberg">
    <title>@yield('title', 'Tuspasos | Reflexology Andover')</title>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    {!! HTML::style('css/bootstrap.min.css') !!}

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>

        body {
            font-family: "Arial", sans-serif;
            background: url("images/background_bars.png") repeat-y;
            color: #9a9a9a;
        }

        #title_header {
            margin-top: 25px;
            position: relative;
        }
        #title_header .header_img_button {
            margin: 2px 2px 12px 3px;
            box-shadow: 7px 7px 5px #aaaaaa;
            max-width: 15%;
            height: auto;
        }
        #title_header .top_image_menu {
            padding-left: 11%;
        }
        #title_header .header_img_button:hover {
            box-shadow: 7px 7px 5px #8c8c8c;
        }
        #title_header .header_img_button:active {
            box-shadow: 4px 4px 3px #aaaaaa;
        }
        .header_bar {
            height: 8px;
        }
        .footer_bar {
            margin-top: 40px;
            height: 8px;
        }
        .bars {
            background-color: #7FC6C1;
            border-top: 1px #666666 solid;
            border-bottom: 1px  #666666 solid;
        }

        .navigation_list {
            font-family: "Arial", sans-serif;
            border: none !important;
            text-align: left;
            font-size: 18px;
            list-style-type: none;
            margin-left: 60px;
            min-width: 290px;
            padding-right: 10px;
        }
        .navigation_list a {
            text-decoration: none;
            color: #9a9a9a;
        }

        .navigation_list li {
            padding-top: 7px;
            padding-left: 2px;
            padding-bottom: 7px;
        }

        .navigation_list li:hover {
            background-color: #f9f9f9;
            color: #7fc6c1;
        }

        .main_logo {
            margin-left: 70px;
        }

        .turquoise {
            color: #7FC6C1;
        }

        .section-header {
            margin-top: 10px;
            font-size: 18px;
        }
    </style>
</head>
<body>
<div id="title_header">
    <div class="header_bar bars" style="top: 0;height: 8px;"></div>
    <div class="row">
        <div class="col-sm-3">
            <a href="{!! route('home') !!}">{!! HTML::image('images/tuspas_logo.png', 'tuspasos logo', ['class' => 'main_logo img-responsive']) !!}</a>
        </div>
        <div class="col-sm-3 col-sm-offset-5">
            <p style="margin-top: 36px;font-size: larger;">
                tel: 07514 024 008<br>
            email: info@tuspasosreflexology.co.uk<br>
            Andover  |  Wilton</p>
        </div>
    </div>
    <div class="header_bar bars" style="bottom: 0;"></div>
</div>

<div class="row">
    <div class="col-sm-2" style="min-width: 360px; margin-top: 25px; padding-bottom: 30px;border-right: 1px darkgray solid;">

            <ul class="navigation_list">
                <a href="{!! route('home') !!}"><li>home</li></a>
                <a href="{!! route('about') !!}"><li>about</li></a>
                <a href="{!! route('whatis') !!}"><li>what is reflexology ?</li></a>
                <a href="{!! route('session') !!}"><li>reflexology session</li></a>
                <a href="{!! route('lymph_drainage') !!}"><li>reflexology lymph drainage</li></a>
                <a href="{!! route('facial') !!}"><li>facial reflexology</li></a>
                <a href="{!! route('hand') !!}"><li>hand reflexology</li></a>
                <a href="{!! route('testimonials') !!}"><li>testimonials</li></a>
                <a href="{!! route('prices') !!}"><li>prices</li></a>
                <a href="{!! route('contact') !!}"><li>contact</li></a>
            </ul>
    </div>
    <div class="col-sm-8" style="padding-left: 30px;">
        @yield('content')
    </div>
</div>

<div class="footer_bar bars"></div>




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
{!! HTML::script('js/jquery.min.js') !!}
<!-- Include all compiled plugins (below), or include individual files as needed -->
{!! HTML::script('js/bootstrap.min.js') !!}
</body>
</html>
