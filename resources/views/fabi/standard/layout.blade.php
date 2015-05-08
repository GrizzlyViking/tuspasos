<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Reflexology Andover">
    <meta name="keywords" content="Reflexology, Andover, Wilton, reflexology Andover, Tuspasos Andover, Tus Pasos Andover, Tuspasos Reflexology, Tus Pasos Reflexology, Tus Pasos Wilton, Hand Reflexology, facial reflexology, reflexology lymph drainage, what is reflexology, foot reflexology, reflexology hampshire, reflexology Wilton">
    <meta name="author" content="Natalia Schlossberg">
    <title>@yield('title', 'Tus Pasos | Reflexology Andover')</title>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    {!! HTML::style('css/bootstrap.min.css') !!}

    <!-- Bootstrap-sidebar -->
    {!! HTML::style('css/sidebar.css') !!}

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>

        body {
            font-family: "Arial", sans-serif;
            background-color: #cccccc;
            color: #9a9a9a;
        }

        .container {
            background-color: #f9f9f9;
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
            margin-left: -15px;
            margin-right: -15px;
        }

        .sidebar-open {
            background-color: #f9f9f9;
            width: 250px;
        }

        .navbar-stacked a:link {
            color:  #515151;
        }

        .navbar-stacked a:visited {
            color:  #515151;
        }

        .nav>li>a {
            padding: 5px 15px;
        }
        .nav>li>a:focus, .nav>li>a:hover {
            background-color: transparent;
        }


        .navbar-stacked li a:hover {
            color: #7FC6C1;
        }

        .navbar-default {
            border: none;
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
            color: #7FC6C1 !important;
        }

        .section-header {
            margin-top: 10px;
            font-size: 18px;
        }
    </style>
</head>
<body>
<div class="container col-md-offset-1 col-md-10" id="container">
    <!-- Fixed navbar -->
    <div class="header_bar bars" style="margin-top: 10px;top: 0;height: 8px;"></div>
    <div class="navbar navbar-static navbar-default col-md-offset-1">
        <div class="container-fluid">
            <div class="navbar-header" style="width: 100%;">
                <button type="button" class="navbar-toggle toggle-left hidden-md hidden-lg" data-toggle="sidebar"
                        data-target=".sidebar-left">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="{!! route('home') !!}">
                    {!! HTML::image('images/Logo_web_background_large.jpeg', 'tuspasos logo', ['style' => 'width: 278px; height: 96px; margin-top: 5px; margin-bottom: -10px;']) !!}
                </a>
                <div class="hidden-xs" style="float: right;margin-top: 25px;">
                        tel: 07514 024 008<br>
                        email: info@tuspasosreflexology.co.uk<br>
                        Andover  |  Wilton
                </div>
            </div>
        </div>
    </div>
    <div class="header_bar bars" style="top: 0;height: 8px;margin-bottom: 10px;"></div>
    <!-- Begin page content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-7 col-sm-2 col-md-2 sidebar sidebar-left sidebar-animate sidebar-md-show col-md-offset-1">
                <ul class="nav navbar-stacked">
                    <li style="margin-bottom: 50px;">&nbsp;</li>
                    <li>&nbsp;</li>
                    <li><a href="{!! route('home') !!}">home</a></li>
                    <li><a href="{!! route('about') !!}">about</a></li>
                    <li><a href="{!! route('whatis') !!}">what is reflexology?</a></li>
                    <li><a href="{!! route('session') !!}">reflexology session</a></li>
                    <li><a href="{!! route('lymph_drainage') !!}">lymph drainage</a></li>
                    <li><a href="{!! route('facial') !!}">facial reflexology</a></li>
                    <li><a href="{!! route('hand') !!}">hand reflexology</a></li>
                    <li><a href="{!! route('testimonials') !!}">testimonials</a></li>
                    <li><a href="{!! route('prices') !!}">prices</a></li>
                    <li><a href="{!! route('contact') !!}">contact</a></li>
                    <li>&nbsp;</li>
                    <li>&nbsp;</li>
                    <li>&nbsp;</li>
                </ul>
            </div>
            <div class="main col-md-9 col-sm-offset-2 col-md-offset-2" style="min-height: 700px;">
                @yield('content')
            </div>
        </div>
    </div>


    <div class="footer_bar bars" style="margin-bottom: 5px;"></div>
    <div class="row">
        <span class="col-md-12" style="margin-bottom: 5px;text-align: center;">Copyright &#169; | Tus Pasos Reflexology 2015 | Website Designed by Edelmann Design.</span></div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
{!! HTML::script('js/jquery.min.js') !!}
<!-- Include all compiled plugins (below), or include individual files as needed -->
{!! HTML::script('js/bootstrap.min.js') !!}

{!! HTML::script('js/sidebar.js') !!}



<script>
    function activeTab() {
        var panel_text = $('.section-header').find('.panel-body').html().trim();

        $('.navbar-stacked').find('li').each(function(j, item) {

            var li_item = $(this).find('a');

            if(panel_text == 'welcome to <span class="turquoise">tus pasos reflexology</span>' && li_item.html() == 'home') {
                li_item.addClass('turquoise');
            } else if(li_item.html() == panel_text) {
                li_item.addClass('turquoise');
            } else {
                li_item.removeClass('turquoise');
            }
        });
    }


    $(document).ready(function(){
        activeTab();
    });
</script>
</body>
</html>
