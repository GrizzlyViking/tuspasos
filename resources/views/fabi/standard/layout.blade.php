<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Tuspasos')</title>

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
            font-family: 'Raleway', sans-serif;
            background: url("images/background_bars.png") repeat-y;
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
            height: 8px;
        }
        .bars {
            background-color: #7FC6C1;
            border-top: 1px #666666 solid;
            border-bottom: 1px  #666666 solid;
        }
        .btn-group-vertical {
            margin: 20px;
        }
        .btn-group-vertical button.btn {
            font-family: 'Raleway', sans-serif;
            border: none !important;
            text-align: left;
            font-size: 18px;

        }

        .turquoise {
            background-color: #7FC6C1;
            border: 1px #666666 solid;
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
        <div class="col-sm-3" style="background-color: #ffffff; width: 100%;">
            {!! HTML::image('images/tuspas_logo.png') !!}

        </div>
    </div>
    <div class="header_bar bars" style="bottom: 0;"></div>
</div>

<div class="row">
    <div class="col-sm-3 col-sm-offset-1" style="margin-top: 25px; padding-bottom: 30px;border-right: 1px darkgray solid;">
        <div class="btn-group-vertical" role="group">
            <button type="button" class="btn btn-default">{!! link_to_route('home', 'home') !!}</button>
            <button type="button" class="btn btn-default">{!! link_to_route('about', 'about') !!}</button>
            <button type="button" class="btn btn-default">{!! link_to_route('whatis', 'what is reflexology') !!}</button>
            <button type="button" class="btn btn-default">{!! link_to_route('session', 'reflexology session') !!}</button>
            <button type="button" class="btn btn-default">{!! link_to_route('lymph_drainage', 'reflexology lymph drainage') !!}</button>
            <button type="button" class="btn btn-default">{!! link_to_route('facial', 'facial reflexology') !!}</button>
            <button type="button" class="btn btn-default">{!! link_to_route('hand', 'hand reflexology') !!}</button>
            <button type="button" class="btn btn-default">{!! link_to_route('testimonials', 'testimonials') !!}</button>
            <button type="button" class="btn btn-default">{!! link_to_route('prices', 'prices') !!}</button>
            <button type="button" class="btn btn-default">{!! link_to_route('contact', 'contact') !!}</button>
        </div>
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