@extends('fabi.standard.layout')

@section('title')
    Tus Pasos | What is reflexology
@stop


@section('content')
    <div class="panel panel-default section-header">
        <div class="panel-body">
            what is reflexology?
        </div>
    </div>

    <div class="row">
        <div class="col-sm-7">
            <p>Reflexology is a complementary therapy that can be used by any age, from the new born to
                the elderly, which involves the application of gentle pressure to reflex areas in the feet,
                hands and face. These reflex points correspond to all the organs, glands and parts of the
                body. Stimulating these reflexes properly may help with a variety of health problems in a
                natural way, such as:</p>


            <ul>
                <li>Arthritis, sciatica, chronic back pain</li>
                <li>Stress related conditions (hypertension, migraines, insomnia,
                    anxiety, digestive problems such as IBS)
                </li>
                <li>Hormone imbalances</li>
                <li>Fertility</li>
            </ul><br>



            <b>Benefits of Reflexology:</b><br><br>

            <ul>
                <li>Helps relieve stress and tension and restores vitality.</li>
                <li>Improves lymphatic and blood circulation.</li>
                <li>Allows the body to reach and maintain its natural balance.</li>
                <li>Improves sleep.</li>
                <li>Promotes deep relaxation.</li>
                <li>Helps to eliminate toxins from the body.</li>
                <li>Improves sense of well being and promotes better health.</li>
                <li>Increases energy</li>
            </ul>

            <p>Reflexology should not be viewed as a replacement for medical care. Reflexologists do not claim to cure, diagnose or prescribe and
            aim to work alongside conventional medicine.</p>
        </div>

        <div class="col-sm-5">
            {!! HTML::image('images/reflex_foot_with_candles.jpg', 'reflexology of foot, with candles', ['class' => 'img-responsive']) !!}
        </div>
    </div>
@stop