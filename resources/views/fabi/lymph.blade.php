@extends('fabi.standard.layout')

@section('content')
    <div class="panel panel-default section-header">
        <div class="panel-body">
            reflexology lymph drainage
        </div>
    </div>

    <div class="row">
        <div class="col-sm-7">
            <p>Reflexology Lymph Drainage (RLD) is  a reflexology technique which focuses on stimulating
            the lymphatic reflexes on the feet. It was developed by Sally Kay and it is used with
            patients who suffer from secondary lymphoedema.</p>

            <p>Lymphoedema can manifest through a swollen arm, a painful shoulder, uncomfortable underarm
            swelling, weakness and problems with everyday living activities. The aim of this precision
            treatment is to cause an effect on the lymphatic system in the body and help with the
            reduction of lymphoedema.</p>

            <p>RLD may result in a significant reduction of swelling, pain and discomfort. It also helps
            with arm mobility, increasing strength.</p>

            <p>Although the technique was originally developed to treat lymphoedema, it may be used for
            the following conditions:</p>

            <ul>
                <li>Chronic Fatigue</li>
                <li>ME</li>
                <li>Fibromyalgia</li>
                <li>Rheumatoid Arthritis and Arthritis</li>
                <li>Asthma</li>
            </ul>
        </div>

        <div class="col-sm-5">
            {!! HTML::image('images/lymph_drainage.jpg', 'Lymph Drainage', ['class' => 'img-responsive']) !!}
        </div>
    </div>
@stop