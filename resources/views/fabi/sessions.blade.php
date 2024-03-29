@extends('fabi.standard.layout')

@section('title')
    Tus Pasos | Reflexology Sessions
@stop

@section('content')
    <div class="panel panel-default section-header">
        <div class="panel-body">
            reflexology session
        </div>
    </div>

    <div class="row">
        <div class="col-sm-7">
            <p>When you come for a treatment, depending on the type of reflexology, the most clothing that
            will have to be removed will be your socks and shoes.</p>

            <p>A full medical history will be requested, this enables the therapist to find out a bit more
            about you and tailor the treatment to best suit your needs. Therefore please allow at least
            90 minutes for your first session. Then, you will be asked to sign a consent form for
            treatment. All information will be kept confidential.</p>

            <p>The therapist then use their hands to apply pressure to the feet and lower leg, hands or face
            dependent upon the type of reflexology chosen.</p>

            <p>At Tus Pasos Reflexology appointments are given with adequate time. Should your treatment require
             extra time, it will be provided without additional charge. What is most important is that you reap the benefits of reflexology with each session.</p>
        </div>

        <div class="col-sm-5">
            {!! HTML::image('images/Feet_with_grass_and_flowers.jpg', 'Feet with grass and flowers', ['class' => 'img-responsive']) !!}
        </div>
    </div>
@stop


