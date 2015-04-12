@extends('fabi.standard.layout')

@section('content')
    <div class="panel panel-default section-header">
        <div class="panel-body">
            facial reflexology
        </div>
    </div>

    <div class="row">
        <div class="col-sm-7">
            <p>Facial reflexology is described as a relaxing treatment which
            encourages deep relaxation, an improvement in general wellbeing and helps relieve tension.
            It is always helpful for those suffering from insomnia, stress, anxiety, migraines and
            headaches.  It may also reduce the appearance of fine lines and wrinkles.</p>

            <p>Facial reflexology involves both massage and stimulation of reflex points on the face.
            Facial stimulation has been shown to be
            powerful due to the proximity of the nerves cells connected to the brain stem and the
            release of endorphins.</p>

            <p><b>Benefits of Facial Reflexology:</b><br><br>

            <ul>
                <li>Improves lymphatic and blood circulation</li>
                <li>Rapid relief of tension on the face, scalp and neck.</li>
                <li>Deep relaxation</li>
            </ul>
            </p>
        </div>

        <div class="col-sm-5">
            {!! HTML::image('images/facial_reflexology.jpg', 'Facial reflexology', ['class' => 'img-responsive']) !!}
        </div>
    </div>
@stop