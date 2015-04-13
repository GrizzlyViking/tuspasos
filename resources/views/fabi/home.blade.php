@extends('fabi.standard.layout')

@section('content')

    <div class="panel panel-default section-header">
        <div class="panel-body">
            welcome to <span class="turquoise">tus pasos reflexology</span>
        </div>
    </div>
    <div class="row" style="padding-right: 15px;padding-bottom: 50px;"><div class="col-sm-5">
        <p>At Tus Pasos Reflexology we understand that we rush
        through life so much and probably forget to stop and
        take time out for ourselves.  When we do that, our stress
        levels build up and we enjoy life less and our overall
        well-being suffers.</p>

        <p>Our reflexology treatments are the perfect relief for modern
        life, helping you to manage stress, improve your sleep
        patterns, cope with pain and just feel more balanced and
        relaxed.</p>

        <p>We provide foot, hand and facial reflexology treatments in
        Andover and Wilton, enabling us to treat anyone, from the
        young to the elderly, men, women and those with specific
        needs.</p>
    </div>
    <div class="col-sm-7" style="padding-bottom: 5px;padding-right: 0px;">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    {!! HTML::image('images/carousel/facial_reflex.jpg') !!}
                    <div class="carousel-caption">
                        Facial Reflexology
                    </div>
                </div>
                <div class="item">
                    {!! HTML::image('images/carousel/hand_reflex.jpg') !!}
                    <div class="carousel-caption">
                        Hand Reflexology
                    </div>
                </div>
                <div class="item">
                    {!! HTML::image('images/carousel/Reflexology_session.jpg') !!}
                    <div class="carousel-caption">
                        Reflexology Session
                    </div>
                </div>
                <div class="item">
                    {!! HTML::image('images/carousel/foot1.jpg') !!}
                    <div class="carousel-caption">
                        Foot Reflexology
                    </div>
                </div>
                <div class="item">
                    {!! HTML::image('images/carousel/foot2.jpg') !!}
                    <div class="carousel-caption">
                        Reflexology Lymph Drainage
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div></div>
@stop