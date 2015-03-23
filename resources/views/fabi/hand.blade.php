@extends('fabi.standard.layout')

@section('content')
    <div class="panel panel-default section-header">
        <div class="panel-body">
            hand reflexology
        </div>
    </div>

    <div class="row">
        <div class="col-sm-7">
            <p>Hand reflexology is an empowering therapy which may help
            sufferers of IBS, headaches, sinusitis and provide relief from stress and tension.</p>

            <p>It is often used as an alternative to traditional foot reflexology, when it is not
            possible to treat the feet as a result of an injury, sensitivity, athlete's foot infections
            or for amputees.</p>

            <p><b>Benefits of Hand Reflexology:</b><br><br>

            Relieves stress and anxiety<br><br>
            Helps to relive pain in the arms and hands linked to conditions such as carpal tunnel
                syndrome, frozen shoulder, whiplash and tennis elbow.<br><br>
            Clients are able to work on their own hands between treatments</p>
        </div>

        <div class="col-sm-5">
            {!! HTML::image('images/hand_reflexology.jpg', 'Hand reflexology', ['class' => 'img-responsive']) !!}
        </div>
    </div>
@stop